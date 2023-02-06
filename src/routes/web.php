<?php

use App\Http\Controllers\Admin\AmenityController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\Admin\LoginController;
use Illuminate\Support\Facades\Route;


Route::middleware(['manager', 'notification'])->name('admin.')->prefix('admin')->group(function() {
    Route::get('', [AdminController::class, 'index'])->name('home');
    Route::resource('product', ProductController::class)->names('product')->middleware('role:manager');
    Route::resource('category', CategoryController::class)->names('category')->middleware('role:admin');
    Route::resource('amenity', AmenityController::class)->names('amenity')->middleware('role:admin');

    require __DIR__ . '/uiRoute.php';
});

Route::middleware('redirect.auth')->name('admin.')->prefix('admin')->group(function() {
    Route::get('signin', [LoginController::class, 'index'])->name('login');
    Route::post('signin', [LoginController::class, 'signin'])->name('signin');
    Route::get('signup', [LoginController::class, 'register'])->name('register');
    Route::post('signup', [LoginController::class, 'signup'])->name('signup');
});
Route::get('admin/logout', [LoginController::class, 'logout'])->name('admin.logout');

require __DIR__ . '/clientRoute.php';
