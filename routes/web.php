<?php

use App\Http\Controllers\Auth\GoogleController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
;
        
        Route::get('/', function () {
    return view('welcome');
});
        Route::get('/login', function () {
    return view('login');
})->name('login');
        Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');