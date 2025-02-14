<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ContactsController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/homepage', [HomepageController::class, 'index'])->name('homepage');
    Route::get('/services', [ServicesController::class, 'index'])->name('services');
    Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');
});

require __DIR__.'/auth.php';
