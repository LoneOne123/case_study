<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/jobs', function () {
    return view('jobs.index');
})->middleware(['auth', 'verified'])->name('jobs.index');

Route::get('/companies', function () {
    return view('companies.index');
})->middleware(['auth', 'verified'])->name('companies.index');

Route::get('/companies/add', function () {
    return view('companies.add');
})->middleware(['auth', 'verified'])->name('companies.add');

Route::get('/categories', function () {
    return view('categories.index');
})->middleware(['auth', 'verified'])->name('categories.index');

Route::get('/categories/add', function () {
    return view('categories.add');
})->middleware(['auth', 'verified'])->name('categories.add');

Route::get('/users', function () {
    return view('users.index');
})->middleware(['auth', 'verified'])->name('users.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
