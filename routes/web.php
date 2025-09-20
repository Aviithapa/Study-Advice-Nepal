<?php

use App\Http\Controllers\Website\HomeController;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';
require __DIR__ . '/backend.php';

// Home route
Route::get('/', [HomeController::class, 'index']);
Route::get('/destination/{slug}', [HomeController::class, 'destination']);
Route::get('/service/{slug}', [HomeController::class, 'service']);

Route::get('/{slug}', [HomeController::class, 'slug']);
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
