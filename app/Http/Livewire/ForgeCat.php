<?php

namespace App\Http\Livewire;

use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Contracts\View\View;

class ForgeCat extends ForgeBase
{
    private string $data;

    public string $customWidth;
    public string $customHeight;

    public bool $viewImage;

    public string $forged;

    public function mount()
    {
        // this isnt needed since avatar has its own view now..
        $this->viewImage = true;
        $this->customWidth = "";
        $this->customHeight = "";

        parent::mount();
    }

    public function downloadImage()
    {
        $base64 = $this->forged;
        $base64 = str_replace(['data:image/jpeg;base64,', 'data:image/png;base64,'], '', $base64);
        $base64 = str_replace(' ', '+', $base64);
        $this->data = base64_decode($base64);

        return response()->streamDownload(function () {
            echo $this->data;
        }, 'Cat.png');
    }

    public function forge(): string
    {
        if($this->customWidth && $this->customHeight){
            return (string) Image::make('https://cataas.com/cat?width=' . $this->customWidth . '&height=' . $this->customHeight)->encode('data-url');
        }
        else if($this->customWidth){
            return (string) Image::make('https://cataas.com/cat?width=' . $this->customWidth)->encode('data-url');
        }
        else if($this->customHeight){
            return (string) Image::make('https://cataas.com/cat?height=' . $this->customHeight)->encode('data-url');
        }
        return (string) Image::make('https://cataas.com/cat?width=500')->encode('data-url');
    }

    public function resizeImage($width, $height){
        $this->customWidth = $width;
        $this->customHeight = $height;

        return $this->forge();
    }

    public function render(): View
    {
        return view('livewire.forge-cat');
    }
}
