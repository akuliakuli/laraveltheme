<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/set-theme', [HomeController::class, 'setTheme'])->name('set.theme');
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts');
