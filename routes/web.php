<?php

use App\Http\Controllers\CommuteController;
use App\Http\Controllers\PoepleController;
use App\Http\Controllers\ShiftController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ShiftController::class, 'main'])->name('main');

//shift
Route::get('/shifts/index', [ShiftController::class, 'index'])->name('Shift.index');
Route::get('/shifts/create', [ShiftController::class, 'create'])->name('Shift.create');
Route::post('/shifts/store', [ShiftController::class, 'store'])->name('Shift.store');
Route::get('/shifts/{shift}/edit', [ShiftController::class, 'edit'])->name('Shift.edit');
Route::put('/shifts/{shift}', [ShiftController::class, 'update'])->name('Shift.update');
Route::delete('/shifts/{shift}', [ShiftController::class, 'destroy'])->name('Shift.destroy');

//poeple
Route::get('/poeples/index', [PoepleController::class, 'index'])->name('Poeple.index');
Route::get('/poeples/create', [PoepleController::class, 'create'])->name('Poeple.create');
Route::post('/poeples/store', [PoepleController::class, 'store'])->name('Poeple.store');
Route::get('/poeples/{poeple}/edit', [PoepleController::class, 'edit'])->name('Poeple.edit');
Route::put('/poeples/{poeple}', [PoepleController::class, 'update'])->name('Poeple.update');
Route::delete('/poeples/{poeple}', [PoepleController::class, 'destroy'])->name('Poeple.destroy');

//commute
// Route::get('/commutes/index', [CommuteController::class, 'index'])->name('Commute.index');
// // Route::get('/commutes/show', [CommuteController::class, 'show'])->name('Commute.show');
// Route::get('/commutes/create', [CommuteController::class, 'create'])->name('Commute.create');
// Route::post('/commutes/store', [CommuteController::class, 'store'])->name('Commute.store');
// Route::get('/commutes/{commute}/edit', [CommuteController::class, 'edit'])->name('Commute.edit');
// Route::put('/commutes/{commute}', [CommuteController::class, 'update'])->name('Commute.update');
// Route::delete('/commutes/{commute}', [CommuteController::class, 'destroy'])->name('Commute.destroy');
