<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmailVerification;
use App\Http\Controllers\PasswordResetcontroller;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::view('/','welcome')->name('home');


Route::middleware('guest')->group(function(){
    Route::view('/login','auth.login')->name('view.login');

    Route::view('/register','auth.register')->name('view.register');

    Route::post('/login',[AuthController::class,'login'])->name('login');

    Route::post('/register',[AuthController::class,'register'])->name('register');

    Route::view('/password_reset','auth.forgot-password')->name('password.request');

    Route::get('/reset-password/{token}',[PasswordResetcontroller::class,'see'])->name('password.reset');

    Route::post('/password_reset',[PasswordResetcontroller::class,'send'])->name('password.email');

Route::post('/reset-password',[PasswordResetcontroller::class,'reset'])->name('password.update');

});

Route::middleware('auth')->group(function(){
    Route::post('/logout',[AuthController::class,'logout'])->name('logout');

    Route::view('/profile','auth.profile')->middleware('verified')->name('view.profile');

    Route::post('/profile/update',[UserController::class,'update'])->name('update');

    Route::post('/profile/update_password',[UserController::class,'update_password'])->name('update_password');

    Route::post('/profile/delete',[UserController::class,'destroy'])->name('destroy');

    Route::view('/email/verify','auth.verify-email')->name('verification.notice');

    Route::get('/email/verify/{id}/{hash}',[EmailVerification::class,'verifyemail'])->name('verification.verify');

    Route::post('/email/verification-notification',[EmailVerification::class,'sendemail'])->middleware('throttle:6,1')->name('verification.send');
});
