<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function(){
    return redirect('/index.html');
})->name('home');

Route::get('/about', function(){
    return redirect('/about/index.html');
})->name('about');

Route::get('/services',function(){
    return redirect('/services/index.html');
})->name('services');

Route::get('/contact/index.html',function(){
    return redirect('/contact');
});

Route::get('/contact', function(){
    return view('contact');
})->name('contact');

Route::get('/privacy',function(){
    return redirect('/privacy/index.html');
})->name('privacy');

Route::get('/contact/press', [ContactController::class, 'contactPress'])->name('contact.press');
Route::get('/contact/phonics', [ContactController::class, 'contactPhonics'])->name('contact.phonics');
Route::get('/contact/mukashi', [ContactController::class, 'contactMukashi'])->name('contact.mukashi');
Route::get('/contact/game', [ContactController::class, 'contactGame'])->name('contact.game');
Route::get('/contact/koudan', [ContactController::class, 'contactKoudan'])->name('contact.koudan');
Route::get('/contact/anger', [ContactController::class, 'contactAnger'])->name('contact.anger');
Route::get('/contact/general', [ContactController::class, 'contactGeneral'])->name('contact.general');

Route::post('/contact/general', [ContactController::class, 'submitGeneral'])->name('contact.general.submit');
Route::post('/contact/press', [ContactController::class, 'submitPress'])->name('contact.press.submit');
Route::post('/contact/phonics', [ContactController::class, 'submitPhonics'])->name('contact.phonics.submit');
Route::post('/contact/mukashi', [ContactController::class, 'submitMukashi'])->name('contact.mukashi.submit');
Route::post('/contact/game', [ContactController::class, 'submitGame'])->name('contact.game.submit');
Route::post('/contact/koudan', [ContactController::class, 'submitKoudan'])->name('contact.koudan.submit');
Route::post('/contact/anger', [ContactController::class, 'submitAnger'])->name('contact.anger.submit');
