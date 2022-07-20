<?php

namespace App\Actions\Search;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;

class ListSearchableRoutes
{
    /**
     * List all routes that are searchable from the web.php routes file.
     */
    protected $sections = [
        'basics',
    ];

    /**
     * List all routes that are searchable by the frontend.
     *
     * We should prob cache this later on... Cache::remember..
     */
    public function List(): Collection
    {
        return collect(Route::getRoutes())->filter(function ($value, $key) {
            return Str::of($value->uri)->contains($this->sections);
        });
    }
}

