<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [LoginController::class, 'dashboard']);

    Route::get('/store', [StoreController::class, 'index'])->name('store');
    Route::get('/store/create', [StoreController::class, 'create'])->name('store.create');
    Route::get('/store/edit/{id}', [StoreController::class, 'edit'])->name('store.edit');
    Route::post('/store/store', [StoreController::class, 'store'])->name('store.store');
    Route::get('/store/delete/{id}', [StoreController::class, 'delete'])->name('store.delete');

    Route::get('/book', [BookController::class, 'index'])->name('book');
    Route::get('/book/create', [BookController::class, 'create'])->name('book.create');
    Route::get('/book/edit/{id}', [BookController::class, 'edit'])->name('book.edit');
    Route::post('/book/store', [BookController::class, 'store'])->name('book.store');
    Route::get('/book/delete/{id}', [BookController::class, 'delete'])->name('book.delete');
    
}); 
