<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\CommentController;


Route::get('/', function () {
    return view('web.home');
});

Route::get('/login-page', function(){
    return view ('Auth.login');
});

// User Route
Route::post('/register', [AuthController::class,'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:api');
Route::get('/user', [AuthController::class, 'user'])->middleware('auth:api');
Route::delete('/delete-account', [AuthController::class, 'deleteAccount'])->middleware('auth:api');
Route::post('/update-profile', [AuthController::class, 'updateProfile'])->middleware('auth:api');