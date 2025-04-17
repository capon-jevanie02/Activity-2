<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'index'])->name('users.index');
Route::get('/create', [UserController::class, 'create'])->name('users.create');
Route::post('/store', [UserController::class, 'store'])->name('users.store');
Route::get('/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
Route::put('/update/{id}', [UserController::class, 'update'])->name('users.update');
Route::delete('/delete/{id}', [UserController::class, 'destroy'])->name('users.destroy');
Route::get('/profile/{id}', [UserController::class, 'show'])->name('users.profile');
