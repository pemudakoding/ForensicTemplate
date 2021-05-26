<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;


Route::get('administrator/login', [AuthenticatedSessionController::class, 'create'])
                ->middleware('guest')
                ->name('administrator.login.index');
Route::post('administrator/login', [AuthenticatedSessionController::class, 'store'])
                ->middleware('guest')
                ->name('administrator.login');
Route::post('administrator/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->middleware('auth')
                ->name('administrator.logout');
