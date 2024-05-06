<?php

use App\Http\Controllers\GoogleLoginController;
use App\Http\Controllers\GoogleDisconnectController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// GoogleLoginController redirect and callback urls
Route::get('/policy', function () {
    return view('policy');
});
Route::get('/term', function () {
    return view('term');
});
Route::get('/login/google', [GoogleLoginController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('/login/google/callback', [GoogleLoginController::class, 'handleGoogleCallback']);
Route::get('/logout/google', [GoogleLoginController::class, 'disconnectGoogle'])->name('logout.google');
//Route::get('/hash-password', function () {
//    $password = '123456';
//    $hashedPassword = bcrypt($password);
//
//    echo "Contraseña hasheada: $hashedPassword";
//});



