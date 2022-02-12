<?php

use Illuminate\Support\Facades\Route;


Route::get('/test', function () {
    dd("hello");
});

Route::prefix('panel')->group(function () {
    Route::get('dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
    Route::get('export/users/pdf', [\App\Http\Controllers\Admin\UserController::class, 'export'])->name('users.export.pdf');
    Route::resource('permissions', \App\Http\Controllers\Admin\PermissionController::class);
    Route::resource('roles', \App\Http\Controllers\Admin\RoleController::class);
    Route::resource('categories', \App\Http\Controllers\Admin\CategoryController::class);
    Route::resource('brands', \App\Http\Controllers\Admin\BrandController::class);
    Route::resource('warranties', \App\Http\Controllers\Admin\BrandController::class);
});
