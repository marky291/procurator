<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\View\View;

class ForgeSentence extends ForgeBase
{
    public string $forged;

    public function forge(): string
    {
        return fake()->sentence;
    }

    public function render(): View
    {
        return view('livewire.forge-sentence');
    }
}
