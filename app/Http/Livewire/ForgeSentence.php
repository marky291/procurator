<?php

namespace App\Http\Livewire;

class ForgeSentence extends ForgeBase
{
    function forge(): string
    {
        return fake()->sentence;
    }
}
