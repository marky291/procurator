<?php

namespace App\Http\Livewire;

class ForgeParagraph extends ForgeBase
{
    function forge(): string
    {
        return fake()->paragraph(7);
    }
}
