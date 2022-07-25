<?php

namespace App\Http\Livewire;

use Illuminate\Support\Collection;
use Livewire\Component;

class Search extends Component
{
    public $message;
    public Collection $results;

    public function mount(){
        $this->results = new Collection;
    }

    public function search(){
        $this->results->push($this->message);
    }

    public function updatedMessage(){
        $this->search();
    }

    public function render()
    {
        return view("components.search");
    }
}
