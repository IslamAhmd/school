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


Route::get('/index', 'PagesController@index')->name('pages.index');
Route::get('/contact', 'PagesController@contact')->name('pages.contact');

Route::post('/carts', 'PagesController@cart')->name('pages.cart');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
