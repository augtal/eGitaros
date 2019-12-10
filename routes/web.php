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

Route::get('/', 'PagesController@home');

Route::get('/flush', 'PagesController@flush');

Route::get('/about', 'PagesController@about');

Route::get('/contact', 'ContactsController@contact');

Route::get('/contact/create', 'ContactsController@create');

Route::post('/contact/insert', 'ContactsController@insert');

Route::get('/contact/edit/{id}', 'ContactsController@edit');

Route::post('/contact/update/{id}', 'ContactsController@update');

Route::get('/contact/remove/{id}', 'ContactsController@delete');

Route::get('/guitar', 'PagesController@home');

Route::get('/guitar/cart', 'GuitarController@cartView');

Route::get('/guitar/cart/confim', 'GuitarController@cartConfirm');

Route::get('/guitar/{num}', 'GuitarController@getAllGuitars');

Route::get('/guitar/{num}/create', 'GuitarController@createGuitar');

Route::post('/guitar/{num}/insert', 'GuitarController@insert');

Route::get('/guitar/{num}/{id}', 'GuitarController@getGuitar');

Route::get('/guitar/{num}/{id}/edit', 'GuitarController@editGuitar');

Route::get('/guitar/{num}/{id}/delete', 'GuitarController@delete');

Route::post('/guitar/{num}/{id}/update', 'GuitarController@update');

Route::get('/atc/{id}', 'GuitarController@addToCart');

Route::get('/rfc/{id}', 'GuitarController@removeFromCart');

Route::get('/updc/{id}', 'GuitarController@addToCart');

Route::post('/updc/insert/{id}', 'GuitarController@insertOrder');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/orders', 'OrderController@getAllOrders');

Route::get('/orders/{id}', 'OrderController@getOrder');

