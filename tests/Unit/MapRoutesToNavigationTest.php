<?php

namespace Tests\Unit;

use App\Actions\Search\ListSearchableRoutes;
use App\Actions\Search\MapRoutesToNavigation;
use Illuminate\Support\Facades\Route;
use Tests\TestCase;

class MapRoutesToNavigationTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $mapper = new MapRoutesToNavigation;
        $routes = new ListSearchableRoutes;

        $mapper->GroupLayer(
            $routes->List()
        );
    }
}
