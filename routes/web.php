<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Auth\UserController;


Route::get('/login',[UserController::class, 'loginView'])->name('login');

Route::get('/register',[UserController::class, 'registerView'])->name('register');

Route::get('/',[PageController::class, 'index'])->name('index');
    
Route::post('register', [UserController::class, 'register'])->name('registration');

Route::post('login', [UserController::class, 'login'])->name('loginpost');

Route::middleware('auth')->group(function () {

    Route::get('/profile',[PageController::class, 'profile'])->name('profile');
    
    Route::get('/category',[PageController::class, 'category'])->name('category');
    
    Route::get('/dashboard',[UserController::class, 'dashboard'])->name('dashboard');

    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
});