<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Admin\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Admin\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Admin\Auth\PasswordController;
use App\Http\Controllers\Admin\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Admin\Profile\ProfileController;

Route::prefix('admin')->group(function () {
  Route::middleware('auth')->group(function () {
    // verify-email
    Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
      ->name('admin.verification.notice');
    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
      ->middleware(['signed', 'throttle:6,1'])
      ->name('admin.verification.verify');
    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
      ->middleware('throttle:6,1')
      ->name('admin.verification.send');

    // confirm-password
    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
      ->name('admin.password.confirm');
    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);
    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    // logout
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
      ->name('admin.logout');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('admin.profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('admin.profile.destroy');

    Route::get('/dashboard', function () {
      return Inertia::render('Admin/Dashboard');
    })->middleware(['verified'])->name('admin.dashboard');
  });
});
