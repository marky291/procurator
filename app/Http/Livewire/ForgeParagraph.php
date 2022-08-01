<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\View\View;

class ForgeParagraph extends ForgeBase
{
    public function mount()
    {
        parent::mount();
    }

    public function forge(): string
    {
        return fake()->paragraph(7);
    }

    public function render(): View
    {
        return view('livewire.forge-paragraph');
    }
}
