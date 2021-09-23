<?php

use App\Http\Controllers\ImageInterventionController;
use Illuminate\Support\Facades\Route;


// frontEnd Route
Route::get('/', [App\Http\Controllers\MastaringController::class, 'index'])->name('index');
Route::get('create-page', [App\Http\Controllers\MastaringController::class, 'createProduct'])->name('createProduct');

Route::get('all-product', [App\Http\Controllers\ProductController::class, 'allProduct'])->name('allProduct');
Route::post('new-product', [App\Http\Controllers\ProductController::class, 'newProduct'])->name('newProduct');
Route::get('edit-product/{id}', [App\Http\Controllers\ProductController::class, 'editProduct'])->name('editProduct');
Route::post('update-product', [App\Http\Controllers\ProductController::class, 'updateProduct'])->name('updateProduct');
Route::get('delete-product/{id}', [App\Http\Controllers\ProductController::class, 'deleteProduct'])->name('deleteProduct');

// Intervention Image Package Laravel
Route::get('image-intervention', [App\Http\Controllers\ImageInterventionController::class, 'ImageIntervention'])->name('ImageIntervention');
Route::post('image-upload', [App\Http\Controllers\ImageInterventionController::class, 'imageupload'])->name('imageupload');

// Restore
Route::get('restore-product', [App\Http\Controllers\ProductController::class, 'restoreProduct'])->name('restoreProduct');
