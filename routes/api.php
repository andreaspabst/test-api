<?php

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

Route::apiResource('users/{user}/todos', 'TodoController');
Route::apiResource('users/{user}/comments', 'CommentController');
Route::apiResource('users', 'UserController');

Route::apiResource('posts/{post}/comments', 'CommentController');
Route::apiResource('posts', 'PostController');

Route::apiResource('todos', 'TodoController');

Route::apiResource('comments', 'CommentController');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
