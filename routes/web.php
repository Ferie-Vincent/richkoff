<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiffuseurController;
use App\Http\Controllers\ParfumController;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

/*
 * Diffuseur Route
 */
Route::prefix('diffuseur')->group(function () {
    Route::get('/', [DiffuseurController::class, 'index'])->name('diffuseur-index');
    Route::get('/maison', [DiffuseurController::class,'maison'])->name('maison');
    Route::get('/commerce', [DiffuseurController::class,'commerce'])->name('commerce');
    Route::get('/faq', [DiffuseurController::class,'faq'])->name('faq');
    Route::get('/qrbox', [ DiffuseurController::class,'qrbox'])->name('qrbox');
    Route::get('/qrart', [ DiffuseurController::class,'qrart'])->name('qrart');
    Route::get('/pro', [DiffuseurController::class,'pro'])->name('pro');
    Route::get('/slim', [DiffuseurController::class,'slim'])->name('slim');
    Route::get('/spray', [DiffuseurController::class,'spray'])->name('spray');
});


/*
 * Parfum Route
 */
Route::prefix('parfum')->group(function () {
    Route::get('/', [ParfumController::class, 'index'])->name('parfum-index');
    Route::get('/exode', [ParfumController::class,'exode'])->name('exode');
    Route::get('/makeda', [ParfumController::class,'makeda'])->name('makeda');
    Route::get('/santal', [ParfumController::class,'santal'])->name('santal');
    Route::get('/voyage', [ParfumController::class,'voyage'])->name('voyage');
    Route::get('/confusion', [ParfumController::class, 'confusion'])->name('confusion');
    Route::get('/ceinture-noire', [ParfumController::class, 'ceintureNoire'])->name('ceinture-noire');
});

Route::post('/form-submit', [FormController::class, 'submit'])->name('form.submit');

Route::get('/contact', [ContactController::class,'index'])->name('contact');
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');