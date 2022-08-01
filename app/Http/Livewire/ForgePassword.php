<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\View\View;

class ForgePassword extends ForgeBase
{
    public function mount()
    {
        parent::mount();
    }

    public function forge(): string
    {
        return fake()->password;
    }

    public function render(): View
    {
        return view('livewire.forge-password');
    }
}
