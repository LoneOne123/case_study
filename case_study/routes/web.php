<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

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

Route::controller(CategoryController::class)
    ->prefix('categories')
    ->middleware(['auth', 'verified'])
    ->name('categories.')
    ->group(function () {

    Route::get('/', 'index')
        ->name('index');

    Route::get('/add', 'create')
        ->name('add');

    Route::post('/store', 'store')
        ->name('store');

    Route::get('/{category}', 'show')
        ->name('detail');

    Route::get('/{category}/edit', 'edit')
        ->name('edit');

    Route::patch('/{category}', 'update')
        ->name('update');

    Route::delete('/{category}', 'destroy')
        ->name('delete');

});

Route::controller(JobController::class)
    ->prefix('jobs')
    ->middleware(['auth', 'verified'])
    ->name('jobs.')
    ->group(function () {

    Route::get('/', 'index')
        ->name('index');

    Route::get('/add', 'create')
        ->name('add');

    Route::post('/store', 'store')
        ->name('store');

    Route::get('/{job}', 'show')
        ->name('detail');

    Route::get('/{job}/edit', 'edit')
        ->name('edit');

    Route::patch('/{job}', 'update')
        ->name('update');

    Route::delete('/{job}', 'destroy')
        ->name('delete');

});

Route::get('/users', function () {
    return view('users.index');
})->middleware(['auth', 'verified'])->name('users.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
