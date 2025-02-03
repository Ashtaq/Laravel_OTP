<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Livewire\Auth\ForgotPassword;

Route::get('/index', function () {
    return view('index');
});


Route::get('/forgot-password', App\Livewire\Auth\ForgotPassword::class)
    ->middleware('guest')
    ->name('password.request');

Route::get('/products', function () {
    return view('/products');
});

Route::get('/career', function () {
    return view('career');
});

Route::get('/contact', function () {
    return view('contact');
});

// ... existing code ...
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
// ... existing code ...

// ... existing code ...
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// ... existing code ...

// Route::get('/products', [ProductController::class, 'index'])->name('products');

Route::middleware(['auth'])->group(function () {
    Route::get('/verify-otp', function () {
        return view('auth.verify-otp');
    })->name('verify.otp');
});

require __DIR__.'/auth.php';
