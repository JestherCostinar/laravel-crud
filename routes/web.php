<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::prefix('product')->group(function () {
    Route::get('/create', [ProductController::class, 'create'])->name('product.create');
    Route::get('/', [ProductController::class, 'index'])->name('product');
    Route::get('/{id}', [ProductController::class, 'show'])->name('product.show');
    Route::post('/', [ProductController::class, 'store'])->name('product.store');
    Route::delete('/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
    Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::patch('/{id}', [ProductController::class, 'update'])->name('product.update');
});
