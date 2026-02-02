<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/contatti', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contatti', [ContactController::class, 'store'])->name('contact.store');
Route::get('/forum', [PageController::class, 'forum'])->name('forum');
