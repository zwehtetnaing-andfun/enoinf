<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

// Main pages
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/privacy', [PageController::class, 'privacy'])->name('privacy');

// Contact form pages
Route::get('/contact/press', [PageController::class, 'contactPress'])->name('contact.press');
Route::get('/contact/phonics', [PageController::class, 'contactPhonics'])->name('contact.phonics');
Route::get('/contact/mukashi', [PageController::class, 'contactMukashi'])->name('contact.mukashi');
Route::get('/contact/game', [PageController::class, 'contactGame'])->name('contact.game');
Route::get('/contact/koudan', [PageController::class, 'contactKoudan'])->name('contact.koudan');
Route::get('/contact/anger', [PageController::class, 'contactAnger'])->name('contact.anger');
Route::get('/contact/general', [PageController::class, 'contactGeneral'])->name('contact.general');

// Contact form submissions
Route::post('/contact/general', [ContactController::class, 'submitGeneral'])->name('contact.general.submit');
