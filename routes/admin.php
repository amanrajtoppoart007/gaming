<?php

Route::get('/dashboard', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('dashboard');
Route::post('/file-upload', [App\Http\Controllers\Admin\FileUploadController::class, 'storeMedia'])->name('media.upload');

 Route::resource('users','App\Http\Controllers\Admin\UserController');
 Route::resource('puzzle','App\Http\Controllers\Admin\PuzzleController');
 Route::put('puzzle/{id}/destroy',[App\Http\Controllers\Admin\PuzzleController::class,'destroy'])->name('puzzle.destroy');
