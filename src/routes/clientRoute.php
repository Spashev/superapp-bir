<?php

use App\Http\Controllers\Auth\User\LoginController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::middleware('guest')->name('user.')->group(function() {
    Route::get('signin', [LoginController::class, 'index'])->name('login');
    Route::post('signin', [LoginController::class, 'signin'])->name('signin');
    Route::get('signup', [LoginController::class, 'register'])->name('register');
    Route::post('signup', [LoginController::class, 'signup'])->name('signup');
});
