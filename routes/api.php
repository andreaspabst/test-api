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

Route::resource('users/{user}/todos', 'TodoController');
Route::resource('users/{user}/comments', 'CommentController');
Route::resource('users', 'UserController');

Route::resource('posts/{post}/comments', 'CommentController');
Route::resource('posts', 'PostController');

Route::resource('todos', 'TodoController');

Route::resource('comments', 'CommentController');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
