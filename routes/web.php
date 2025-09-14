<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/user/{email}', [UserController::class, 'getUserByEmail']);

Route::get('/', function () {
    return view('welcome');
});



