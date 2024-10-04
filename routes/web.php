<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [UserController::class, 'showHome']);
Route::get('/ourproduct', [UserController::class, 'showProduct']);
Route::get('/createyourown', [UserController::class, 'showCreate']);
