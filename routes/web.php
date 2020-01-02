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

Route::get('/hello', function () {
    return view('hello');
});

Route :: get('/greeting/{crop}', 'GrainsController@mbegu');

Route :: post('/grr', 'GrainsController@brr');

Route ::get('/products', 'ProductController@index');
//API CRUD
Route ::post('/products', 'ProductController@create');
Route ::get('/products', 'ProductController@getProducts');
Route ::get('/products/{id}', 'ProductController@getProductById');
Route ::put('/products/{id}', 'ProductController@updateProduct');
Route ::delete('/products/{id}', 'ProductController@deleteProduct');
