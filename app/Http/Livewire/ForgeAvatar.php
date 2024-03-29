<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\View\View;
use Laravolt\Avatar\Facade as Avatar;

class ForgeAvatar extends ForgeBase
{
    public string $forged;

    public function mount()
    {
        parent::mount();
    }

    public function copyAvatarImage(){
        $this->emit('avatarImagedCopied', $this->forged);
        $this->emitTo('copy-modal', 'show', $this->kebabedClassname());
    }

    public function downloadImage()
    {
        $stringValue = null;

        $base64 = $this->forged;
        $base64 = str_replace('data:image/png;base64,', '', $base64);
        $base64 = str_replace(' ', '+', $base64);
        $stringValue = base64_decode($base64);

        return response()->streamDownload(function () use ($stringValue) {
            echo $stringValue;
        }, 'Avatar.png');
    }

    public function forge(): string
    {
        return Avatar::create(fake()->name())->toBase64();
    }

    public function render(): View
    {
        return view('livewire.forge-avatar');
    }
}
