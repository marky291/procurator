<?php

namespace App\Http\Livewire;

use Livewire\Component;

class GenerateSentence extends Component
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
        return view('livewire.generate-sentence');
    }
}
