<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\Api\MentorApiController;
use App\Http\Controllers\Api\WorkoutApiController;
use App\Http\Controllers\Api\KelasApiController;
use App\Http\Controllers\Api\BannerApiController;

// Register dan login tanpa CSRF token supaya bisa dipanggil dari Flutter/Postman
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// API public

Route::post('/token', [AuthController::class, 'login']);
// Protected routes (harus login pakai token)
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::get('/mentors', [MentorApiController::class, 'index']);
Route::get('/workouts', [WorkoutApiController::class, 'index']);
Route::get('/kelas', [KelasApiController::class, 'index']);
Route::get('/banners', [BannerApiController::class, 'index']);

    Route::post('/logout', [AuthController::class, 'logout']);
});