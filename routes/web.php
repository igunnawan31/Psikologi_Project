<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\TemplateController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [UserController::class, 'showHome'])->name('home');
Route::get('/ourproduct', [UserController::class, 'showProduct']);
Route::get('/createyourown', [UserController::class, 'showCreate']);
Route::get('/login', [UserController::class, 'showLogin']);
Route::get('/createyourown/pickyourtemplates', [UserController::class, 'showtemplates']);
Route::get('/createyourown/pickyourtemplates/form', [UserController::class, 'showform']);
// Route::get('/createyourown/pickyourtemplates/form/preview', [UserController::class, 'showPreview'])->name('showPreview');
Route::get('/createyourown/pickyourtemplates/form/payment', [UserController::class, 'showpayment']);
// Route::get('/createyourown/pickyourtemplates/form/preview', [PesananController::class, 'preview'])->name('preview');

Route::get('auth/google', [GoogleController::class, 'googlepage']);
Route::get('auth/google/callback', [GoogleController::class, 'googlecallback']);

Route::post('/sendEmail', [EmailController::class,'sendEmail']) -> name('send.email');
Route::get('/generatePdf', [PdfController::class, 'generatePDF']) -> name('generate.pdf');
Route::get('/contact', function() {
    return view('contact');
})->name('contact');


Route::get('/templates/{name}', function ($name) {
    // Periksa apakah view ada di folder templates
    if (view()->exists('templates.' . $name)) {
        // Render view dari folder templates
        return view('templates.' . $name);
    }
    abort(404);  // Jika file tidak ditemukan, return 404
});

// Route to display all templates (our products)
Route::get('/ourproduct', [TemplateController::class, 'index']);

// Route to display a specific template's details
Route::get('/ourproduct/{namatemplate}', [TemplateController::class, 'show']);

Route::get('/amara', function() {
    return view('templates.amara');
})->name('amara');
Route::get('/arim', function() {
    return view('templates.arim');
})->name('arim');
Route::get('/fai', function() {
    return view('templates.fai');
})->name('fai');
Route::get('/devity', function() {
    return view('templates.devity');
})->name('devity');

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/'); // Redirect to home or desired page
})->name('logout');