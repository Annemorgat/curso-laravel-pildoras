<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

Route::get('/', [ProductoController::class, 'index'])->name('welcome');

Route::get(__(key: '/create'), [ProductoController::class, 'create'])->name('createProduct');
Route::get(__(key: '/show/{id}'), [ProductoController::class, 'show'])->name('showProduct');
Route::get(__(key: '/edit/{id}'), [ProductoController::class, 'edit'])->name('editProduct');
Route::put(__('/actualizar'), [ProductoController::class, 'update'])->name('updateProduct');
Route::post(__('/insertar'), [ProductoController::class, 'store'])->name('insertProduct');
Route::delete(__(key: '/borrar/{id}'), [ProductoController::class, 'destroy'])->name('deleteProduct');
