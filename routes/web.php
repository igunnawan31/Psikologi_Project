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
Route::get('/createyourown/pickyourtemplates', [UserController::class, 'showtemplates']);
Route::get('/createyourown/pickyourtemplates/form', [UserController::class, 'showform']);
Route::get('/createyourown/pickyourtemplates/form/preview', [UserController::class, 'showPreview']);
Route::get('/createyourown/pickyourtemplates/form/preview/payment', [UserController::class, 'showpayment']);

Route::get('auth/google', [GoogleController::class, 'googlepage']);
Route::get('auth/google/callback', [GoogleController::class, 'googlecallback']);