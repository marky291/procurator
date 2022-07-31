<?php

namespace App\Http\Livewire;

use Laravolt\Avatar\Facade as Avatar;

class ForgeAvatar extends ForgeBase
{
    private string $data;

    public function forge(): string
    {
        return Avatar::create(fake()->name())->toBase64();
    }

    public function generatePNG()
    {
        $base64 = $this->forged;
        $base64 = str_replace('data:image/png;base64,', '', $base64);
        $base64 = str_replace(' ', '+', $base64);
        $this->data = base64_decode($base64);

        return response()->streamDownload(function () {
            echo $this->data;
        }, 'Avatar.png');
    }
}
