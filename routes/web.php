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

Route::get('/home', 'HomeController@index');

//-------Main pages---------//

Route::get('/', 'PagesController@getIndex');
Route::get('menu', 'PagesController@getMenu');
Route::get('reservation', 'PagesController@getReservation');
Route::get('contact', 'PagesController@getContact');
Route::get('cart', 'PagesController@getCart');
Route::get('confirm', 'PagesController@getConfirm');

Route::post('/auth/register', 'UsersController@store');
Route::post('/auth/login', 'UsersController@postLogin');


//-------Cart pages---------//


Route::get('/reduce/{id}', [
	'uses' => 'CartController@reduce',
	'as' => 'product.reduce'
	]);

Route::get('/increase/{id}', [
	'uses' => 'CartController@increase',
	'as' => 'product.increase'
	]);

Route::get('/remove/{id}', [
	'uses' => 'CartController@removeItem',
	'as' => 'product.remove'
	]);

Route::get('/addProduct/{id}', 'ProductController@addProduct');
Route::post('/admin/reservation/store', 'ReservationController@store');


//-------Checkout pages---------//


Route::group(['middleware' => 'auth'], function()
{
    Route::get('/checkout', 'CartController@getCheckout');
    Route::post('/checkout', 'CartController@postCheckout');
    Route::get('/orders', 'OrdersController@getOrders');
    Route::get('/profile', 'ProfileController@getProfile');
	Route::get('/profile/edit', 'ProfileController@edit');
	Route::post('/profile/update', 'ProfileController@update');
});


Route::group(['middleware' => 'admin'], function()
{
	//-------Order pages---------//

	Route::get('/admin', 'AdminController@index');

	//-------Order pages---------//

	Route::get('/admin/orders', 'OrdersController@admOrders');

	//-------Products pages---------//

	Route::get('/admin/product/new', 'ProductController@create');
	Route::get('/admin/products', 'ProductController@index');
	Route::get('/admin/product/destroy/{id}', 'ProductController@destroy');
	Route::post('/admin/product/store', 'ProductController@store');
	Route::get('/admin/product/{id}/edit', 'ProductController@edit');
	Route::get('/admin/product/update/{id}', 'ProductController@update');

	//-------Reservations pages---------//

	Route::get('/admin/reservations', 'ReservationController@index');
	Route::get('/admin/reservation/{id}/edit', 'ReservationController@edit');
	Route::put('/admin/reservation/update/{id}', 'ReservationController@update');
	Route::get('/admin/reservation/destroy/{id}', 'ReservationController@destroy');

	//-------Users pages---------//

	Route::get('/admin/users', 'UsersController@index');
	Route::post('/admin/user/store', 'UsersController@store');
	Route::get('/admin/user/new', 'UsersController@create');
	Route::get('/admin/user/destroy/{id}', 'UsersController@destroy');
	Route::get('/admin/user/{id}/edit', 'UsersController@edit');
	Route::post('/admin/user/update/{id}', 'UsersController@update');


	//-------Categories pages---------//

	Route::get('/admin/categories', 'CategoryController@index');
	Route::get('/admin/category/destroy/{id}', 'CategoryController@destroy');
	Route::post('/admin/category/store', 'CategoryController@store');
	Route::get('/admin/category/{id}/edit', 'CategoryController@edit');
	Route::get('/admin/category/update/{id}', 'CategoryController@update');

});
