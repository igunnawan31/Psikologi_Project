<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\PesananController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [UserController::class, 'showHome']);
Route::get('/ourproduct', [UserController::class, 'showProduct']);
Route::get('/createyourown', [UserController::class, 'showCreate']);
Route::get('/login', [UserController::class, 'showLogin']);
Route::get('/createyourown/pickyourtemplates', [UserController::class, 'showtemplates']);
Route::get('/createyourown/pickyourtemplates/form', [UserController::class, 'showform']);
Route::get('/createyourown/pickyourtemplates/form/preview', [UserController::class, 'showPreview'])->name('showPreview');
Route::get('/createyourown/pickyourtemplates/form/preview/payment', [UserController::class, 'showpayment']);
Route::post('/createyourown/pickyourtemplates/form/preview', [PesananController::class, 'store'])->name('pesanan.store');
// Route::get('/createyourown/pickyourtemplates/form/preview', [PesananController::class, 'preview'])->name('preview');

Route::get('auth/google', [GoogleController::class, 'googlepage']);
Route::get('auth/google/callback', [GoogleController::class, 'googlecallback']);