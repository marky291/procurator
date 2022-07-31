<?php

namespace App\Http\Livewire;

use Intervention\Image\ImageManagerStatic as Image;

class ForgeCat extends ForgeBase
{
    private string $data;

    public $customWidth;

    public $customHeight;

    public function forge(): string
    {
        error_log($this->customWidth);
        error_log($this->customHeight);
        return (string) Image::make('https://cataas.com/cat?width=500')->encode('data-url');
    }

    public function generatePNG()
    {
        $base64 = $this->forged;
        $base64 = str_replace(['data:image/jpeg;base64,', 'data:image/png;base64,'], '', $base64);
        $base64 = str_replace(' ', '+', $base64);
        $this->data = base64_decode($base64);

        return response()->streamDownload(function () {
            echo $this->data;
        }, 'Cat.png');
    }
}
