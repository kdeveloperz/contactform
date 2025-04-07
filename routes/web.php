<?php

use Illuminate\Support\Facades\Route;
use Kacedeveloperz\Contactform\Http\Controllers\ContactFormController;

Route::middleware(['guest', 'web'])->group(function () {
    
    Route::get(config('kace_contactform.contact_url'), [ContactFormController::class, 'create'])->name('kace.contact.form');
    Route::post('/submit/message', [ContactFormController::class, 'store'])->name('kace.contact');
});
