<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Customer\RentalController;
use App\Http\Controllers\Customer\InvoiceController;
use App\Http\Controllers\Customer\ProfileController;
use App\Http\Controllers\Customer\DashboardController;
use App\Http\Controllers\Auth\Customer\PasswordController;
use App\Http\Controllers\Auth\Customer\NewPasswordController;
use App\Http\Controllers\Auth\Customer\VerifyEmailController;
use App\Http\Controllers\Auth\Customer\RegisteredUserController;
use App\Http\Controllers\Auth\Customer\PasswordResetLinkController;
use App\Http\Controllers\Auth\Customer\ConfirmablePasswordController;
use App\Http\Controllers\Auth\Customer\AuthenticatedSessionController;
use App\Http\Controllers\Auth\Customer\EmailVerificationPromptController;
use App\Http\Controllers\Auth\Customer\EmailVerificationNotificationController;

Route::group(['middleware' => ['guest:customer'], 'prefix' => 'customer/', 'as' => 'customer.'] ,function () {

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store'])->name('login.store');

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.store');
});

Route::group(['middleware' => ['auth:customer'], 'prefix' => 'customer/', 'as' => 'customer.'],function () {
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::patch('/profile/update/{customer}', [ProfileController::class, 'update'])->name('profile.update');
    Route::patch('/profile/update-password/{customer}', [ProfileController::class, 'updatePassword'])->name('profile.update-password');

    Route::get('/invoice/{invoice}', [InvoiceController::class, 'show'])->name('invoice.show');

    Route::get('/rentals', [RentalController::class, 'index'])->name('rentals');
    Route::get('/rental/create', [RentalController::class, 'create'])->name('rental.create');
    Route::post('/rental/store', [RentalController::class, 'store'])->name('rental.store');
// Route::get('verify-email', EmailVerificationPromptController::class)
    //             ->name('verification.notice');

    // Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
    //             ->middleware(['signed', 'throttle:6,1'])
    //             ->name('verification.verify');

    // Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
    //             ->middleware('throttle:6,1')
    //             ->name('verification.send');

    // Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
    //             ->name('password.confirm');

    // Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    // Route::put('password', [PasswordController::class, 'update'])->name('password.update');

});
