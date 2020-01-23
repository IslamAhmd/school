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


Route::get('/', 'PagesController@index')->name('pages.index');
Route::get('/contact', 'PagesController@contact')->name('pages.contact');

Route::post('/carts', 'PagesController@cart')->name('pages.cart');

Auth::routes();

Route::get('orders', 'OrdersController@index')->name('orders.index');


Route::group(['middleware' => ['auth', 'super_admin']], function(){

	Route::get('/dashboard', 'HomeController@index')->name('dashboard');

	Route::resource('users', 'UserController')->except(['edit', 'create', 'update', 'store']);


	Route::resource('orders', 'OrdersController')->except(['edit', 'create', 'index']);


});
