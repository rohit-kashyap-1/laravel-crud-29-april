<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/create-category',[PostController::class,'create']);
Route::post('/create-category',[PostController::class,'createCategory']);
