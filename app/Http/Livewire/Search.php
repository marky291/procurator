<?php

namespace App\Http\Livewire;

use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Livewire\Component;

class Search extends Component
{
    public Collection $routes;

    public Collection $results;

    protected $listeners = ['clearSearch'];

    public string $query = '';

    public function mount()
    {
        $this->results = collect();
        $this->routes = collect(json_decode(file_get_contents(storage_path('SearchDatabase.json')), true));
    }

    public function clearSearch()
    {
        $this->query = "";
    }

    public function updatedQuery()
    {
        $this->results = $this->routes->filter(function ($route) {
            return Str::of($route['name'])->lower()->is(strtolower("*{$this->query}*"));
        });
    }

    public function render()
    {
        return view('components.search');
    }
}
