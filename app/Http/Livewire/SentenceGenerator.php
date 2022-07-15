<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SentenceGenerator extends Component
{
    public string $sentence;

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
        return view('livewire.sentence-generator');
    }
}
