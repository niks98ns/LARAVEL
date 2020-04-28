<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('foods', 'FoodsController');
Route::resource('restaurants', 'RestaurantsController');
Route::resource('user_orders', 'UserOrdersController');
Route::resource('restaurant_users', 'RestaurantUsersController');


Route::get('restaurant_users', 'RestaurantUsersController@registration');
Route::get('restaurant_users/registration', 'RestaurantUsersController@registration');
// Route::get('restaurant_users/login', 'RestaurantUsersController@login');
// Route::get('flash-message', 'RestaurantUsersController@login');

Route::post('user_login', 'RestaurantUsersController@userPostLogin');
Route::get('login_1', 'RestaurantUsersController@loginform');

// Route::get('flash-message', 'RestaurantUsersController@userLoginIndex');

Route::get('restaurant_users/dashboard', 'RestaurantUsersController@dashboard');
Route::get('logout', 'RestaurantUsersController@logout');


// Route::get('restaurant_users/login', 'RestaurantUsersController@login')->name('restaurant_users.login');