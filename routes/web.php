<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('categories', CategoryController::class)->middleware("auth");
Route::resource('tags', TagController::class)->middleware("auth");
Route::resource('posts', PostController::class)->middleware("auth");

require __DIR__ . '/auth.php';
