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

// Route::get('/', "HomeController@viewHome")->name('home');


Route::get('/', 'HomeController@getProduct')->name('porducts-all');

Route::post('/products', 'ProductsController@store')->name('products-store');

Route::get('products/{id}', 'ProductsController@show')->name('products-show');

Route::put('/products/{id}', 'ProductsController@update')->name('products-update');

Route::delete('/products/{id}', 'ProductsController@destory')->name('products-destroy');
