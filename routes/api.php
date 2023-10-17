<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/posts',[PostController::class,'index']);
Route::get('/posts/{id}',[PostController::class,'show']);


Route::post('/login',[AuthenticationController::class,'login']);

Route::middleware(['auth:sanctum'])->group(function(){
    Route::post('/logout',[AuthenticationController::class,'logout']);
    Route::get('/getCurrentUser',[AuthenticationController::class,'getCurrentUser']);

    Route::post('/posts',[PostController::class,'store']);
});
