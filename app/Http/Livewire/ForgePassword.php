<?php

namespace App\Http\Livewire;

class ForgePassword extends ForgeBase
{
    public function forge(): string
    {
        return fake()->password;
    }
}
