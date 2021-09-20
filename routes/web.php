<?php

use Illuminate\Support\Facades\Route;


// frontEnd Route
Route::get('/', [App\Http\Controllers\MastaringController::class, 'index'])->name('index');
Route::get('create-page', [App\Http\Controllers\MastaringController::class, 'createProduct'])->name('createProduct');

Route::get('all-product', [App\Http\Controllers\ProductController::class, 'allProduct'])->name('allProduct');
Route::post('new-product', [App\Http\Controllers\ProductController::class, 'newProduct'])->name('newProduct');
Route::get('edit-product/{id}', [App\Http\Controllers\ProductController::class, 'editProduct'])->name('editProduct');
Route::post('update-product', [App\Http\Controllers\ProductController::class, 'updateProduct'])->name('updateProduct');
Route::get('delete-product/{id}', [App\Http\Controllers\ProductController::class, 'deleteProduct'])->name('deleteProduct');


// Restore
Route::get('restore-product', [App\Http\Controllers\ProductController::class, 'restoreProduct'])->name('restoreProduct');
