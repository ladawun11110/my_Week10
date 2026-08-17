<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AdminController;

Route::get('/about', [AdminController::class, 'about'])->name('about');
Route::get('/', [AdminController::class, 'blog'])->name('blog');
Route::get('/blog2', [AdminController::class, 'blog2'])->name('blog2');
Route::get('/insert', [AdminController::class, 'create']);
Route::post('/insert', [AdminController::class, 'insert']);
Route::get('/delete/{id}', [AdminController::class, 'delete'])->name('delete');