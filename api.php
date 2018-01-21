<?php

use Illuminate\Http\Request;

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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('api')->get('/hello_world', function () {
    return response()->json(['message' => 'hello world']);
});

Route::middleware('api')->get('/articles', 'ApiController@index');

Route::middleware('api')->get('first/articles', 'ApiController@getFirst');

Route::middleware('api')->get('last/articles', 'ApiController@getLast');

Route::middleware('api')->get('show/{id}/articles', 'ApiController@show');

Route::middleware('api')->post('store/articles', 'ApiController@store');