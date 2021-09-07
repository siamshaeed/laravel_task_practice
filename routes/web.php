<?php
use Illuminate\Support\Facades\Route;


// frontEnd Route
Route::get('/', [App\Http\Controllers\MastaringController::class, 'index'])->name('index');
Route::get('create-page', [App\Http\Controllers\MastaringController::class, 'createProduct'])->name('createProduct');
Route::get('all-product', [App\Http\Controllers\MastaringController::class, 'allProduct'])->name('allProduct');

//for product insert
Route::post('new-product', [App\Http\Controllers\ProductController::class, 'newProduct'])->name('newProduct');