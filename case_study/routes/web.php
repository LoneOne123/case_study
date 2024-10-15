<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CompanyController;
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

Route::get('/jobs/add', function () {
    return view('jobs.add');
})->middleware(['auth', 'verified'])->name('jobs.add');

Route::controller(CompanyController::class)
    ->prefix('companies')
    ->middleware(['auth', 'verified'])
    ->name('companies.')
    ->group(function () {

    Route::get('/', 'index')
        ->name('index');

    Route::get('/add', 'create')
        ->name('add');

    Route::post('/store', 'store')
        ->name('store');

    Route::get('/{company}', 'show')
        ->name('detail');

    Route::get('/{company}/edit', 'edit')
        ->name('edit');

    Route::patch('/{company}', 'update')
        ->name('update');

    Route::delete('/{company}', 'destroy')
        ->name('delete');

});

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
