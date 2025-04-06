<?php

use Illuminate\Support\Facades\Route;
use Kace\Contactform\Http\Controllers\ContactFormController;

Route::middleware(['guest', 'web'])->group(function () {
    Route::get('/contact', [ContactFormController::class, 'create'])->name('kace.contact.form');
    Route::post('/submit/message', [ContactFormController::class, 'store'])->name('kace.contact');
});
