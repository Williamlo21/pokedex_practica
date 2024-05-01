<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PokemonController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('home', HomeController::class);
Route::resource('pokemon', PokemonController::class);

