<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\CommentController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// User Route
Route::post('/register', [AuthController::class,'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:api');
Route::get('/user', [AuthController::class, 'user'])->middleware('auth:api');
Route::delete('/delete-account', [AuthController::class, 'deleteAccount'])->middleware('auth:api');
Route::post('/update-profile', [AuthController::class, 'updateProfile'])->middleware('auth:api');

// Post Route
Route::get('/posts', [PostController::class, 'index'])->middleware('auth:api');
Route::post('/posts', [PostController::class, 'store'])->middleware('auth:api');
Route::post('/post/{id}', [PostController::class, 'update'])->middleware('auth:api');
Route::delete('/post/{id}', [PostController::class, 'destroy'])->middleware('auth:api');

// Like Route
Route::get('/likes/{id}', [LikeController::class, 'getLike'])->middleware('auth:api');
Route::post('/toggle-like/{id}', [LikeController::class, 'toggleLike'])->middleware('auth:api');

// Comment Route
Route::get('comments/{postId}', [CommentController::class, 'show'])->middleware('auth:api');
Route::post('comments/{postId}', [CommentController::class, 'store'])->middleware('auth:api');
Route::post('update-comment/{Id}', [CommentController::class, 'update'])->middleware('auth:api');
Route::delete('comment/{Id}', [CommentController::class, 'destroy'])->middleware('auth:api');