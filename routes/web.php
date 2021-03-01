<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', "RestaurantController@index");
Route::get('/home', "RestaurantController@index");

Route::resource("restaurant", "RestaurantController");
Route::resource("orders", "OrderController");
Route::resource("dishes", "DishController");
Auth::routes();





