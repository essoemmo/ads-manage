<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('tags',[\App\Http\Controllers\Api\TagController::class,'tags'])->name('tags');
Route::post('tags',[\App\Http\Controllers\Api\TagController::class,'addTag'])->name('add.tags');
Route::post('tags/{tag}',[\App\Http\Controllers\Api\TagController::class,'updateTag'])->name('update.tags');
Route::get('tags/{tag}',[\App\Http\Controllers\Api\TagController::class,'deleteTag'])->name('delete.tags');

Route::get('categories',[\App\Http\Controllers\Api\CategoryController::class,'categories'])->name('categories');
Route::post('categories',[\App\Http\Controllers\Api\CategoryController::class,'addCategory'])->name('add.categories');
Route::post('categories/{category}',[\App\Http\Controllers\Api\CategoryController::class,'updateCategory'])->name('update.categories');
Route::get('categories/{category}',[\App\Http\Controllers\Api\CategoryController::class,'deleteCategory'])->name('delete.categories');

