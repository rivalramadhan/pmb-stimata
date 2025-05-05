<?php

use App\Http\Controllers\DocumentController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::resource('users', UserController::class);
Route::resource('payments', PaymentController::class);
Route::resource('documents', DocumentController::class);