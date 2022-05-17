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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'auth:sanctum'], function() {
    Route::get('posts', [ControllerExample::class, 'post']);
    Route::get('posts/{id}', [ControllerExample::class, 'singlePost']);
    Route::post('posts', [ControllerExample::class, 'createPost']);
    Route::put('posts/{id}', [ControllerExample::class, 'updatePost']);
    Route::delete('posts/{id}', [ControllerExample::class, 'deletePost']);
    Route::post('users/writer', [ControllerExample::class, 'createWriter']);
    Route::post(
        'users/subscriber',
        [ControllerExample::class, 'createSubscriber']
    );
    Route::delete('users/{id}', [ControllerExample::class, 'deleteUser']);
});