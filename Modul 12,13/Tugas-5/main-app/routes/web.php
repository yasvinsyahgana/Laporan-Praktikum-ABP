<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\ProductController;

Route::resource('products', ProductController::class)->middleware('auth');


Route::get('/login', [SiteController::class, 'showLogin'])->name('login');
Route::post('/auth', [SiteController::class, 'auth'])->name('auth');
Route::get('/logout', [SiteController::class, 'logout'])->name('logout');

Route::resource('products', ProductController::class)->middleware('auth');
