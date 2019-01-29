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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('dishes','DishController@index');
Route::get('dishes/{id}','DishController@show');
Route::post('dishes','DishController@store');
Route::delete('dishes/{id}','DishController@destroy');

Route::get('menus','MenuController@index');
Route::get('menus/{id}','MenuController@show');

Route::resource('recurrences', 'RecurrenceController');