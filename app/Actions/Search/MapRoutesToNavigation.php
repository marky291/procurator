<?php

namespace App\Actions\Search;

use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class MapRoutesToNavigation
{
    public function navigationFromRoutes(Collection $routes)
    {
        $parseNavigation = new Collection;

        $sections = $routes->filter(function($route) {
            return count(Str::of($route->uri)->explode('/')) == 1;
        });

        foreach ($sections as $section)
        {
            $parsedSubNavigation = collect();

            $navigation = $routes->filter(function($route) use ($section) {
                return !Str::of($route->uri)->contains('#') && Str::of($route->uri)->contains($section->uri) && count(Str::of($route->uri)->explode('/')) == 2;
            });

            foreach ($navigation as $menu) {
                $parsedSubNavigation->put($menu->uri, $routes->filter(function($route) use ($section, $menu) {
                    return Str::of($route->uri)->contains('#') && Str::of($route->uri)->contains([$section->uri, $menu->uri]) && count(Str::of($route->uri)->explode('/')) == 2;
                }));
            }

            $parseNavigation->put($section->uri, $parsedSubNavigation);
        }

        return $parseNavigation;
    }
}
