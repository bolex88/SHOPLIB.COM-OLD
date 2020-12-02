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

Route::get('/', 'PostsController@ShowProducts')->name('products');
Route::get('/product/details/{id}', 'PostsController@ShowProductDetails')->name('product.details');

Auth::routes();

Route::group(['middleware'=>'auth'], function(){

	Route::get('/home', 'UsersController@index')->name('home');
	Route::get('/add-product', 'PostsController@AddProductForm')->name('product.add');
	Route::post('/add', 'PostsController@AddProduct')->name('products.save');
	Route::delete('/product/{id}', 'UsersController@Destroy')->name('product.delete');
	Route::get('/product/edit/{id}', 'UsersController@EditForm')->name('product.edit');
	Route::put('/product/update/{id}', 'UsersController@Update')->name('product.update');
	
});
