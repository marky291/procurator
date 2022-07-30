<?php

namespace App\Http\Livewire;

use App\Actions\Search\ListSearchableRoutes;
use App\Actions\Search\MapRoutesToNavigation;
use Livewire\Component;

class Navigation extends Component
{
    public function render()
    {
        $routes = new ListSearchableRoutes();
        $mapper = new MapRoutesToNavigation();

        return view('livewire.navigation', [
            'navigation' => $mapper->navigationFromRoutes($routes->List()),
        ]);
    }
}
