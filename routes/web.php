<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\LoginControllerX;


Route::get('/create-category',[PostController::class,'create']);
Route::post('/create-category',[PostController::class,'createCategory']);
Route::get('/categories',[PostController::class,'listCategory']);
Route::get('/edit-category/{id}',[PostController::class,'editCategory']);
Route::post('/edit-category',[PostController::class,'updateCategory']);
Route::get('/delete-category/{id}',[PostController::class,'deleteCategory']);
