<?php

namespace App\Http\Livewire;

use Laravolt\Avatar\Facade as Avatar;

class ForgeCat extends ForgeBase
{
    public function forge(): string
    {
        return Avatar::create(fake()->name())->toBase64();
    }
}
