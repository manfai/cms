<?php

use Illuminate\Support\Facades\Route;
use ManFai\Cms\Http\Controllers\AdminController;
use ManFai\Cms\Http\Controllers\PageController;
use ManFai\Cms\Http\Controllers\PostController;

// Route::get('/posts', [AdminController::class, 'index'])->name('admin.index');
// Route::get('/posts/{post}', [AdminController::class, 'show'])->name('admin.show');
// Route::post('/posts', [AdminController::class, 'store'])->name('admin.store');

Route::name('admin.')->prefix(config('cms.prefix','admin'))->group(function () {

    Route::get('/login',  [AdminController::class, 'login'])->name('login');
    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

    Route::get('/', function(){
        if(auth()->check()){
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('admin.login');
        }
    });

    Route::get('/dashboard',      [AdminController::class, 'index'])->name('dashboard');
    Route::get('/settings',        [AdminController::class, 'settings'])->name('settings');
    Route::get('/seo',        [AdminController::class, 'seo'])->name('seo');
    Route::get('/media-libray',        [AdminController::class, 'media'])->name('media');
    Route::get('/user',           [AdminController::class, 'index'])->name('user');

    Route::name('pages.')->prefix('pages')->group(
    function () {
        Route::get('/',       [PageController::class, 'index'])->name('index');
        Route::get('/detail', [PageController::class, 'detail'])->name('detail');
    });

    Route::name('posts.')->prefix('posts')->group(
    function () {
        Route::get('/',       [PostController::class, 'index'])->name('index');
        Route::get('/detail', [PostController::class, 'detail'])->name('detail');
    });

});