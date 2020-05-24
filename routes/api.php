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

Route::get('/', function() {
    return "Hello, my friend!";
});

Route::get('/people','PersonController@index');
Route::post('/people','PersonController@store');
Route::put('/people/{person}','PersonController@update');
Route::delete('/people/{person}','PersonController@delete');
Route::get('/products','ProductController@index');
Route::post('/products','ProductController@store');
Route::put('/products/{product}','ProductController@update');
Route::delete('/products/{product}','ProductController@delete');

