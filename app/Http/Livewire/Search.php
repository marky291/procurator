<?php

namespace App\Http\Livewire;

use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Livewire\Component;

class Search extends Component
{
    public bool $aria = false;

    public Collection $routes;

    public Collection $results;

    public string $query = '';

    public function mount()
    {
        $this->results = collect();
        $this->routes = collect(json_decode(file_get_contents(storage_path('SearchDatabase.json')), true));
    }

    /**
     * On each change of the query, get the routes and filter out the ones that
     * return true, here we use pattern matching reg ex to determine before
     * and after of the query string, this has to be both lower case
     * to remove mistakes on uppercasing.
     *
     * @return void
     */
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
