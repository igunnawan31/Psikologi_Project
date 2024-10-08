<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [UserController::class, 'showHome']);
Route::get('/ourproduct', [UserController::class, 'showProduct']);
Route::get('/createyourown', [UserController::class, 'showCreate']);
Route::get('/login', [UserController::class, 'showLogin']);

Route::get('auth/google', [GoogleController::class, 'googlepage']);
Route::get('auth/google/callback', [GoogleController::class, 'googlecallback']);