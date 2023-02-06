<?php

use App\Http\Controllers\Api\Client\Auth\LoginController;
use App\Http\Controllers\Api\Client\Auth\UserController;
use App\Http\Controllers\Api\SystemNotificationController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum', 'scope.client'])->group(function () {
    Route::get('me', [UserController::class, 'user']);
    Route::put('users/password', [UserController::class, 'updatePassword']);
    Route::put('users/info', [UserController::class, 'updateInfo']);
    Route::get('logout', [LoginController::class, 'logout']);
});

Route::post('signin', [LoginController::class, 'login']);
Route::post('signup', [LoginController::class, 'create']);

Route::get('notification/{notification}', [SystemNotificationController::class, 'notified']);
