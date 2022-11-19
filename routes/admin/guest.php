<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\Auth\NewPasswordController;
use App\Http\Controllers\Admin\Auth\PasswordResetLinkController;
use App\Http\Controllers\Admin\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
  Route::middleware('guest')->group(function () {
    // register
    Route::get('register/secret_path_5xz20rvwg3hoKk5Lnhx', [RegisteredUserController::class, 'create'])
      ->name('admin.register');
    Route::post('register/secret_path_5xz20rvwg3hoKk5Lnhx', [RegisteredUserController::class, 'store']);

    // login
    Route::get('login', [AuthenticatedSessionController::class, 'create'])
      ->name('admin.login');
    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    // forgot-password
    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
      ->name('admin.password.request');
    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
      ->name('admin.password.email');

    // reset-password
    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
      ->name('admin.password.reset');
    Route::post('reset-password', [NewPasswordController::class, 'store'])
      ->name('admin.password.store');
  });
});
