<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServerController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/servers', [ServerController::class, 'index']);
Route::get('/servers/{id}', [ServerController::class, 'show']);
Route::get('/user/{id}', [UserController::class, 'show']);