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
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::view('/', 'welcome')->name('welcome');

// Content...
Route::view('/basics/content', 'welcome')->name('basics.content');
Route::view('/basics/content#forge-sentence', 'welcome')->name('basics.content.sentence');
Route::view('/basics/content#forge-paragraph', 'welcome')->name('basics.content.paragraph');
Route::view('/basics/content#forge-password', 'welcome')->name('basics.content.password');

// Cards...
Route::view('/basics/cards', 'welcome')->name('cards');
Route::view('/basics/cards/secure', 'welcome')->name('cards.secure');
