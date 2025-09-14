<?php

use App\Http\Controllers\PokemonController;
use Illuminate\Support\Facades\Route;

Route::get('/pokemon/{name}', [PokemonController::class, 'getPokemonByName']);

Route::get('/', function () {
    return view('welcome');
});



