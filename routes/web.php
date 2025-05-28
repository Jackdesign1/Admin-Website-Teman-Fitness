<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\WorkoutController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\CompanyProfileController;
use App\Http\Controllers\BannerController;

// Halaman utama (public)
Route::get('/', [CompanyProfileController::class, 'public'])->name('company.public');

// Route auth Laravel standar (login, register via web)
Auth::routes();

// Group route untuk user yang sudah login (session auth)
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::resource('members', MemberController::class);
    Route::resource('workouts', WorkoutController::class);
    Route::resource('mentors', MentorController::class);
    Route::resource('kelas', KelasController::class);
    Route::resource('banner', BannerController::class);

    Route::get('/company-profile', [CompanyProfileController::class, 'index'])->name('company.index');
    Route::get('/company-profile/edit', [CompanyProfileController::class, 'edit'])->name('company.edit');
    Route::post('/company-profile/update', [CompanyProfileController::class, 'update'])->name('company.update');
});