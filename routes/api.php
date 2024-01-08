<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/posts', [PostController::class, 'index'])->middleware(['auth:sanctum']);
Route::get('/posts/{id}', [PostController::class, 'show'])->middleware(['auth:sanctum']);
Route::get('/posts_detail/{id}', [PostController::class, 'show_detail']);
Route::get('/login', [LoginController::class, 'login']);
