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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/product','ProductController@create');
Route::get('/product','ProductController@fetchProducts');
Route::get('/product/{id}','ProductController@fetchProductById');
Route::put('/product/{id}','ProductController@updateProduct');
Route::delete('/product/{id}','ProductController@deleteProduct');

Route::post('/business','BusinessController@create');
Route::get('/business','BusinessController@fetchBusiness');

Route::post('/user','UserController@create');
Route::get('/user','UserController@fetchUser');
