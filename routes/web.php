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
//API CRUD FOR PRODUCTS
Route ::post('/products', 'ProductController@create');
Route ::get('/products', 'ProductController@getProducts');
Route ::get('/products/{id}', 'ProductController@getProductById');
Route ::put('/products/{id}', 'ProductController@updateProduct');
Route ::delete('/products/{id}', 'ProductController@deleteProduct');
//API CRUD FOR SUPPLIERS
Route ::post('/suppliers', 'SupplierController@create');
Route ::get('/suppliers', 'SupplierController@getSuppliers');
Route ::get('/suppliers/{id}', 'SupplierController@getSupplierById');
Route ::put('/suppliers/{id}', 'SupplierController@updateSupplier');
Route ::delete('/suppliers/{id}', 'SupplierController@deleteSupplier');
