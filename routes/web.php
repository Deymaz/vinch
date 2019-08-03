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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin/login', 'Auth\LoginController@loginPage');
Route::post('/admin/login', 'Auth\LoginController@login')->name('login');

Route::group(['middleware' => 'auth'], function () {
});

Route::get('/admin/panel', 'Admin\AdminController@panel')->name('adminPanel')->middleware('web', 'auth');

//CATEGORIES
Route::get('/admin/category/list', 'Admin\CategoriesController@categoriesList')
    ->name('categoriesList')
    ->middleware('web', 'auth');

Route::get('/admin/category/create', 'Admin\CategoriesController@createPage')
    ->name('createCategoryPage')
    ->middleware('web', 'auth');

Route::post('/admin/category/create', 'Admin\CategoriesController@create')
    ->name('createCategory')
    ->middleware('web', 'auth');

Route::get('/admin/category/update/{id}', 'Admin\CategoriesController@updatePage')
    ->name('updateCategoryPage')
    ->middleware('web', 'auth');

Route::post('/admin/category/update/{id}', 'Admin\CategoriesController@update')
    ->name('updateCategory')
    ->middleware('web', 'auth');

Route::post('/admin/category/delete/{id}', 'Admin\CategoriesController@delete')
    ->name('deleteCategory')
    ->middleware('web', 'auth');

// PRODUCTS
Route::get('/admin/product/list', 'Admin\ProductController@list')
    ->name('productsList')
    ->middleware('web', 'auth');

Route::get('/admin/product/create', 'Admin\ProductController@createPage')
    ->name('createProductPage')
    ->middleware('web', 'auth');

Route::post('/admin/product/create', 'Admin\ProductController@create')
    ->name('createProduct')
    ->middleware('web', 'auth');

Route::get('/admin/product/update/{id}', 'Admin\ProductController@updatePage')
    ->name('updateProductPage')
    ->middleware('web', 'auth');

Route::post('/admin/product/update/{id}', 'Admin\ProductController@update')
    ->name('updateProduct')
    ->middleware('web', 'auth');

Route::post('/admin/product/delete/{id}', 'Admin\ProductController@delete')
    ->name('deleteProduct')
    ->middleware('web', 'auth');

//ASSORTIMENT
Route::get('/admin/assortiment/list/{id}', 'Admin\AssortimentController@list')
    ->name('assortimentList')
    ->middleware('web', 'auth');

Route::get('/admin/assortiment/create/{id}', 'Admin\AssortimentController@createPage')
    ->name('createAssortimentPage')
    ->middleware('web', 'auth');

Route::post('/admin/assortiment/create/{id}', 'Admin\AssortimentController@create')
    ->name('createAssortiment')
    ->middleware('web', 'auth');

Route::get('/admin/assortiment/update/{id}', 'Admin\AssortimentController@updatePage')
    ->name('updateAssortimentPage')
    ->middleware('web', 'auth');

Route::post('/admin/assortiment/update/{id}', 'Admin\AssortimentController@update')
    ->name('updateAssortiment')
    ->middleware('web', 'auth');

Route::post('/admin/assortiment/delete/{id}', 'Admin\AssortimentController@delete')
    ->name('deleteAssortiment')
    ->middleware('web', 'auth');
