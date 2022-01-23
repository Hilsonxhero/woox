<?php

use Illuminate\Support\Facades\Route;


Route::get('/test', function () {
    dd("hello");
});

Route::prefix('panel')->group(function () {
    Route::get('dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::resource('users',\App\Http\Controllers\Admin\UserController::class);
});
