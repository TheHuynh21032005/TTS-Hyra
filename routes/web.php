<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\CategoryController;

Route::get('/test', function () {
    return view('welcome');
})->name('test');

Route::get('/', function () {
    return view('test');
})->name('home');


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

Route::get('/category/{category}', [CategoryController::class, 'show']);

Route::get('/filter', function () {
    return view('filter');
})->name('filter');

Route::get('/food-category', function () {
    return view('food-category');
})->name('food-category');

Route::get('/voucher', function () {
    return view('voucher');
})->name('voucher');

Route::get('/countries', function () {
    return view('countries');
})->name('countries');

require __DIR__.'/auth.php';
