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
Route::resource("dishes", "DishController")->middleware("auth");;
Auth::routes();




// LATO CLIENTE
// Route home che contiene l'elenco dei ristoranti

// route ristorante id oppure nome ristorante 

// nel checkout: al click del bottone 'paga' -> route per pushare l'ordine nel db, serve una resource che prende i dati del cliente, e invia l'ordine al ristoratore 
