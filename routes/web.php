<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','RestaurantController@index');
Route::get('/storelist','RestaurantController@storelist');
Route::view('/addstore','addstore');
Route::post('/addstore','RestaurantController@addstore');
Route::get('/deletestore/{id}','RestaurantController@deletestore');
Route::get('/editstore/{id}','RestaurantController@editstore');