<?php

Route::get('/dashboard', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('dashboard');
Route::get('/change-password', [App\Http\Controllers\Admin\HomeController::class, 'password'])->name('change.password');
Route::patch('/admin-password-change', [App\Http\Controllers\Admin\HomeController::class, 'changePassword'])->name('password.change');
Route::post('/file-upload', [App\Http\Controllers\Admin\FileUploadController::class, 'storeMedia'])->name('media.upload');

 Route::resource('users','App\Http\Controllers\Admin\UserController');
  Route::put('users/{id}/destroy',[App\Http\Controllers\Admin\UserController::class,'destroy'])->name('users.destroy');
 Route::resource('puzzle','App\Http\Controllers\Admin\PuzzleController');
 Route::put('puzzle/{id}/destroy',[App\Http\Controllers\Admin\PuzzleController::class,'destroy'])->name('puzzle.destroy');
