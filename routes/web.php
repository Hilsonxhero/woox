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

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

//require __DIR__.'/auth.php';

// Route::get('dd', function () {
//     $data = [
//         'foo' => 'تست متن'
//     ];
//     $pdf = PDF::loadView('pdf', $data);

//     return $pdf->stream('test.pdf');
// });


Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('user')->group(function () {


    Route::middleware(['guest'])->group(function () {

        Route::get('/auth', [\App\Http\Controllers\Auth\AuthController::class, 'index'])->name('user.auth.show');

        Route::post('/auth', [\App\Http\Controllers\Auth\AuthController::class, 'store'])->name('user.auth.store');

        Route::get('/auth/login/confirm', [\App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'create'])
            ->name('user.confirm.login');

        Route::post('/auth/login/confirm/', [\App\Http\Controllers\Auth\ConfirmController::class, 'check'])
            ->name('user.confirm.login.check');

        Route::get('/auth/register/confirm/{phone}', [\App\Http\Controllers\Auth\ConfirmController::class, 'show'])
            ->name('user.confirm.register');

        Route::post('/auth/register/confirm/', [\App\Http\Controllers\Auth\ConfirmController::class, 'check'])
            ->name('user.confirm.register.check');
    });

    Route::middleware(['auth'])->group(function () {
        Route::get('/profile', [\App\Http\Controllers\User\UserController::class, 'profile'])->name('user.profile.show');
    });
});
