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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('user')->group(function (){
    Route::get('/auth', [\App\Http\Controllers\Auth\AuthController::class, 'index'])->name('user.auth.show');
//    Route::post('/auth/confirm', [\App\Http\Controllers\Auth\AuthController::class, 'index'])->name('user.login.show');
});
