<?php

use Illuminate\Support\Facades\Route;
use JohnDoe\BlogPackage\Http\Controllers\PostController;

Route::get('/posts', [AdminController::class, 'index'])->name('admin.index');
Route::get('/posts/{post}', [AdminController::class, 'show'])->name('admin.show');
Route::post('/posts', [AdminController::class, 'store'])->name('admin.store');