<?php

namespace App\Http\Livewire;

class ForgeParagraph extends ForgeBase
{
    public function forge(): string
    {
        return fake()->paragraph(7);
    }
}
