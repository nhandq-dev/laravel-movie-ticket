<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\Auth\NewPasswordController;
use App\Http\Controllers\Admin\Auth\PasswordResetLinkController;
use App\Http\Controllers\Admin\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
  // register
  Route::get('register', [RegisteredUserController::class, 'create'])
    ->name('register');
  Route::post('register', [RegisteredUserController::class, 'store']);

  // login
  Route::get('login', [AuthenticatedSessionController::class, 'create'])
    ->name('login');
  Route::post('login', [AuthenticatedSessionController::class, 'store']);

  // forgot-password
  Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
    ->name('password.request');
  Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
    ->name('password.email');

  // reset-password
  Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
    ->name('password.reset');
  Route::post('reset-password', [NewPasswordController::class, 'store'])
    ->name('password.store');
});
