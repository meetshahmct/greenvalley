<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [ HomeController::class, 'index']);
Route::get('/about-us', [ HomeController::class, 'create']);
Route::get('/our-programs', [ HomeController::class, 'store']);
Route::get('/contact-us', [ HomeController::class, 'show']);
