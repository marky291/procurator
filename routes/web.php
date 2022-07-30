<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/test', function () {
    $routes = new \App\Actions\Search\ListSearchableRoutes();
    $navigs = new \App\Actions\Search\MapRoutesToNavigation();

    return $navigs->navigationFromRoutes($routes->List());
});

// Generic route
Route::view('/', 'welcome')->name('welcome');

// Content...
Route::view('/generators', 'welcome')->name('generators');
Route::view('/generators/content', 'welcome')->name('generators.content');
Route::view('/generators/content#forge-sentence', 'welcome')->name('generators.content.sentence');
Route::view('/generators/content#forge-paragraph', 'welcome')->name('generators.content.paragraph');
Route::view('/generators/content#forge-password', 'welcome')->name('generators.content.password');
