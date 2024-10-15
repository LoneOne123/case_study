<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JobController::class, 'index'])
    ->name('index');

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

Route::get('/jobs', [JobController::class, 'index'])
    ->name('jobs.index');

Route::get('/jobs/{job}', [JobController::class, 'show'])
    ->name('jobs.detail');

Route::controller(JobController::class)
    ->prefix('jobs')
    ->middleware(['auth', 'verified'])
    ->name('jobs.')
    ->group(function () {

    Route::get('/add', 'create')
        ->name('add');

    Route::post('/store', 'store')
        ->name('store');

    Route::get('/{job}/edit', 'edit')
        ->name('edit');

    Route::patch('/{job}', 'update')
        ->name('update');

    Route::delete('/{job}', 'destroy')
        ->name('delete');

});

Route::controller(UserController::class)
    ->prefix('users')
    ->middleware(['auth', 'verified'])
    ->name('users.')
    ->group(function () {

    Route::get('/', 'index')
        ->name('index');

    Route::get('/{user}', 'show')
        ->name('detail');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
