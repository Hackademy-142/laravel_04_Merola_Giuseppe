<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ContactController;

Route::get('/', [PublicController::class, 'homepage'])->name('welcome');

Route::get('/contattaci', [ContactController::class, 'contatti'])->name('contatti');

Route::post('/contattaci', [ContactController::class, 'submit'])->name('contatti.submit');

Route::get('/thankyou/{name}', [ContactController::class, 'thankyou'])->name('thankyou');
