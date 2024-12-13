<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SkincareController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\RecommendationController;

// Halaman awal (public)
Route::get('/', function () {
    return view('welcome'); // View untuk halaman awal
})->name('welcome');

// Halaman login
Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->middleware('guest') 
    ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])
    ->middleware(['guest', 'throttle:10,1'])
    ->name('login.post');

// Route untuk mengirim ulang email verifikasi
Route::post('/email/verification-notification', function () {
    request()->user()->sendEmailVerificationNotification();

    return back()->with('status', 'verification-link-sent');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// Route untuk memverifikasi email
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');

// Route untuk halaman permintaan verifikasi email
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

// Logout route
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

// Halaman register
Route::get('/register', [RegisteredUserController::class, 'create'])
    ->middleware('guest')
    ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store'])
    ->middleware(['guest', 'throttle:10,1']);

// Group route untuk halaman yang memerlukan autentikasi
Route::middleware(['auth', 'verified'])->group(function () {
    // Halaman profil
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/edit', [ProfileController::class, 'update'])->name('profile.update'); 
    Route::put('/profile/password', [ProfileController::class, 'updatePassword'])->name('password.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Halaman dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
// Route untuk halaman utama skincare
Route::get('/skincare', [SkincareController::class, 'welcome'])->name('skincare.welcome');

// Group route untuk fitur rekomendasi
Route::group(['prefix' => 'recommendations'], function () {
    // Menampilkan form rekomendasi
    Route::get('/', [RecommendationController::class, 'showForm'])->name('recommendations.form');

    // Memproses form rekomendasi
    Route::post('/', [RecommendationController::class, 'getRecommendations'])->name('recommendations.process');

    // Menampilkan hasil rekomendasi
    Route::get('/result', [RecommendationController::class, 'showRecommendation'])->name('recommendations.result');

    Route::get('/feedback', [RecommendationController::class, 'showFeedbackForm'])
    ->name('feedback.form');

Route::post('/feedback', [RecommendationController::class, 'submitFeedback'])
    ->name('feedback.submit');

    Route::get('/feedbacks', [RecommendationController::class, 'showFeedbacks'])
    ->name('feedbacks');

});
});