<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/guest/result/{userId}', [App\Http\Controllers\WelcomeController::class, 'result'])->name('guest.result.view');
Route::get('/', [App\Http\Controllers\User\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\User\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\WelcomeController::class, 'about'])->name('about');


Route::prefix('puzzle')->as('puzzle.')->group(function () {
   Route::get('/list', [App\Http\Controllers\User\PuzzleController::class, 'index'])->name('index');
   Route::get('/view/{id}', [App\Http\Controllers\User\PuzzleController::class, 'view'])->name('view');
   Route::post('/check', [App\Http\Controllers\User\PuzzleController::class, 'check'])->name('check');
   Route::get('/result', [App\Http\Controllers\User\PuzzleController::class, 'result'])->name('result');
   Route::get('/replay/{id}', [App\Http\Controllers\User\PuzzleController::class, 'replay'])->name('replay');
});



Route::prefix('admin')->as('admin.')->group(function(){
Route::get('/login', [App\Http\Controllers\AdminAuth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\AdminAuth\LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [App\Http\Controllers\AdminAuth\LoginController::class, 'logout'])->name('logout');
});

//social login routes
Route::prefix('auth')->as('auth.')->group(function(){
Route::get('/redirect/{platform}', [App\Http\Controllers\Auth\SocialLoginController::class, 'index'])->name('login.redirect');
Route::get('/callback/{platform}', [App\Http\Controllers\Auth\SocialLoginController::class, 'callback'])->name('login.callback');
Route::get('/de-authorize/{platform}', [App\Http\Controllers\Auth\SocialLoginController::class, 'deAuthorize'])->name('login.callback');

});


