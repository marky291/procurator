<?php

namespace App\Http\Livewire;

use Illuminate\Support\Collection;
use Livewire\Component;

class Search extends Component
{
    public $message;
    public Collection $results;

    public $showSearchModal = false;
    public $search = '';
    public $searchResults = [];

    public function mount(){
        $this->results = new Collection;
    }

    public function showSearch(){
        $this->showSearchModal = true;
    }

    public function closeSearchModal(){
        $this->showSearchModal = false;
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
