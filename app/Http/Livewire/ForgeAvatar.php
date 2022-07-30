<?php

namespace App\Http\Livewire;

use Laravolt\Avatar\Facade as Avatar;

class ForgeAvatar extends ForgeBase
{
    function forge(): string
    {
        return Avatar::create(fake()->name())->toBase64();
    }
}
