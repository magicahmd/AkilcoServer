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

//Menu
Route::resource('menus', 'MenuController');
Route::get('menus/{menu_id}/dishes', 'MenuController@getMenuDishes');

//Restaurant
Route::get('restaurants','RestaurantController@index');
Route::get('restaurant/{restaurant_id}/menus', 'RestaurantController@getRestaurantMenus');
Route::get('restaurant/{restaurant_id}/tables', 'RestaurantController@getRestaurantTables');

//Table
Route::resource('tables', 'TableController');

//Dish
Route::get('Dish/{id}/sizes','DishController@getDishSizes');

//User
Route::post('logs','UserController@logs');
Route::post('user','UserController@store');
Route::get('user/{id}/roles','UserController@getUserRole');
Route::get('restaurant/{restaurant_id}/waiters', 'UserController@getRestaurantWaiters');
Route::get('restaurant/{restaurant_id}/chefs', 'UserController@getRestaurantChefs');
Route::get('restaurant/{restaurant_id}/managers', 'UserController@getRestaurantManagers');











