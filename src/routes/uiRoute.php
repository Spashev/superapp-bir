<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UIController;

Route::get('undraw', [UIController::class, 'undraw'])->name('ui.undraw');
Route::get('fontawesome', [UIController::class, 'fontawesome'])->name('ui.fontawesome');
Route::get('lineawesome', [UIController::class, 'lineawesome'])->name('ui.lineawesome');
Route::get('themify', [UIController::class, 'themify'])->name('ui.themify');
Route::get('linearicons', [UIController::class, 'linearicons'])->name('ui.linearicons');
Route::get('amcharts-weather-icons', [UIController::class, 'weatherIcons'])->name('ui.amcharts-weather-icons');
