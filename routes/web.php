<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [PageController::class, 'home'])->name('home');
route::get('/contatti', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contatti', [ContactController::class, 'store'])->name('contact.store');
