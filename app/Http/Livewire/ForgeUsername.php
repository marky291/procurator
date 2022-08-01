<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\View\View;

class ForgeUsername extends ForgeBase
{
    public string $forged;

    public function forge(): string
    {
        return fake()->userName;
    }

    public function render(): View
    {
        return view('livewire.forge-username');
    }
}
