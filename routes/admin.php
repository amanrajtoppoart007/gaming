<?php

Route::get('/dashboard', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('dashboard');

 Route::resource('users','App\Http\Controllers\Admin\UserController');
 Route::resource('puzzle','App\Http\Controllers\Admin\PuzzleController');
