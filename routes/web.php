<?php

use App\Http\Controllers\DocumentController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\TestResultController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::resource('users', UserController::class);
Route::resource('payments', PaymentController::class);
Route::resource('documents', DocumentController::class);
Route::resource('registrations', RegistrationController::class); 
Route::resource('test-results', TestResultController::class); // Add this line to register the TestResultController