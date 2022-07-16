<?php

namespace App\Http\Livewire;

class ForgePassword extends ForgeBase
{
    function forge(): string
    {
        return fake()->password;
    }
}
