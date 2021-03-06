<?php

use App\Http\Controllers\HttpClientController;
use App\Http\Controllers\ImageInterventionController;
use App\Http\Controllers\PolymorphicRelationshipController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ValidationsController;
use App\Models\Images;
use App\Models\Posts;
use App\Models\User;
use Illuminate\Support\Facades\Http;

// FrontEnd Route
Route::get('/', [App\Http\Controllers\MastaringController::class, 'index'])->name('index');
Route::get('create-page', [App\Http\Controllers\MastaringController::class, 'createProduct'])->name('createProduct');

// CRUD
Route::get('all-product', [App\Http\Controllers\ProductController::class, 'allProduct'])->name('allProduct');
Route::post('new-product', [App\Http\Controllers\ProductController::class, 'newProduct'])->name('newProduct');
Route::get('edit-product/{id}', [App\Http\Controllers\ProductController::class, 'editProduct'])->name('editProduct');
Route::post('update-product', [App\Http\Controllers\ProductController::class, 'updateProduct'])->name('updateProduct');
Route::get('delete-product/{id}', [App\Http\Controllers\ProductController::class, 'deleteProduct'])->name('deleteProduct');

// Intervention Image Package Laravel
Route::get('image-intervention', [App\Http\Controllers\ImageInterventionController::class, 'ImageIntervention'])->name('ImageIntervention');
Route::post('image-upload', [App\Http\Controllers\ImageInterventionController::class, 'imageupload'])->name('imageupload');

// Restore from soft delete
Route::get('restore-product', [App\Http\Controllers\ProductController::class, 'restoreProduct'])->name('restoreProduct');

//Form Validations with custom message
Route::get('validation/create-form', [ValidationsController::class, 'createForm'])->name('createForm');
Route::post('validation/submit', [ValidationsController::class, 'formSubmit'])->name('formSubmit');

//Polymorphic Relationships
Route::get('polymorphic-relationships/one-to-one', [PolymorphicRelationshipController::class, 'oneToOne']);

// HTTP Client
Route::get('http-client', [HttpClientController::class, 'httpClent']);
Route::get('add-data', [HttpClientController::class, 'addData']);

//Session
Route::get('session/get', [SessionController::class, 'getSessionData']);
Route::get('session/store', [SessionController::class, 'sessionStore']);
Route::get('session/destroy', [SessionController::class, 'sessionDestroy']);

//
