<?php

namespace App\Http\Livewire;

class ForgeSentence extends ForgeBase
{
    public function forge(): string
    {
        return fake()->sentence;
    }
}
