<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ForgeSentence extends Component
{
    public string $sentence;
    public string $clipboardTarget;

    protected $listeners = ['generate'];

    public function mount()
    {
        $this->generate();
    }

    public function generate()
    {
        $this->sentence = fake()->sentence;
    }

    public function render()
    {
        return view('livewire.forge-sentence');
    }
}
