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

Route::get('/customer', 'OrdersController@create');
Route::post('/customer/billing', 'OrdersController@billing');
Route::post('/customer/billing/charge', 'OrdersController@charge');
Route::get('/logistic', 'DeliveriesController@view');

