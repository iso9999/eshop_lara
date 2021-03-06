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



// tests
Route::get('/init','ProductController@init');

//other
Route::get('/', function () {
    return view('welcome');
});


Route::get('/newproduct','ProductController@newProduct');

Route::get('/products','ProductController@listProducts');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

////// our app roots

Route::get('/products','ProductController@listall');
Route::get('/products/list_table','ProductController@list_table');
Route::get('/products/{id}','ProductController@index');
Route::get('/product_c','ProductController@create');
Route::post('/products','ProductController@store');
Route::get('/products/{id}/edit','ProductController@edit');
Route::put('/products/{id}','ProductController@update');
Route::delete('/products/{id}','ProductController@destroy');
