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
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;

Route::get('/', function () {
    return Redirect::route('aboutUs', [Config::get('app.locale')]);
})->name('main');


Route::get('/admin/login', 'Auth\LoginController@loginPage')
    ->name('loginPage')
    ->middleware('web', 'locale')
    ->prefix('{locale}')
    ->where(['locale' => '[a-zA-Z]{2}']);

Route::post('/admin/login', 'Auth\LoginController@login')
    ->name('login');

Route::post('/admin/logout', 'Auth\LoginController@logout')
    ->name('logout');

Route::group(['middleware' => 'auth'], function () {
});

Route::get('/categories/list/{id}', 'CategoryController@subcategoriesList')
    ->name('subcategoriesList')
    ->middleware('web', 'locale')
    ->prefix('{locale}')
    ->where(['locale' => '[a-zA-Z]{2}']);

Route::get('/product/list/{category_id}', 'ProductController@getByCategory')
    ->name('productsToCategoryList')
    ->middleware('web', 'locale')
    ->prefix('{locale}')
    ->where(['locale' => '[a-zA-Z]{2}']);

Route::get('/assortiment/list/{product_id}', 'AssortimentController@getByProduct')
    ->name('productAssortiment')
    ->middleware('web', 'locale')
    ->prefix('{locale}')
    ->where(['locale' => '[a-zA-Z]{2}']);

Route::get('/assortiment/{id}', 'AssortimentController@getById')
    ->name('assortiment')
    ->middleware('web', 'locale')
    ->prefix('{locale}')
    ->where(['locale' => '[a-zA-Z]{2}']);

Route::get('/about_us', 'AboutUsController@page')
    ->name('aboutUs')
    ->middleware('web', 'locale')
    ->prefix('{locale}')
    ->where(['locale' => '[a-zA-Z]{2}']);

Route::get('/contacts', 'ContactsController@page')
    ->name('contacts')
    ->middleware('web', 'locale')
    ->prefix('{locale}')
    ->where(['locale' => '[a-zA-Z]{2}']);

Route::get('/feedback', 'FeedbackController@page')
    ->name('feedback')
    ->middleware('web', 'locale')
    ->prefix('{locale}')
    ->where(['locale' => '[a-zA-Z]{2}']);

Route::post('/feedback', 'FeedbackController@submit')
    ->name('feedbackSubmit')
    ->middleware('web', 'locale')
    ->prefix('{locale}')
    ->where(['locale' => '[a-zA-Z]{2}']);

Route::get('/delivery_and_payment', 'DeliveryAndPaymentController@page')
    ->name('deliveryAndPayment')
    ->middleware('web', 'locale')
    ->prefix('{locale}')
    ->where(['locale' => '[a-zA-Z]{2}']);

// ADMIN ROUTES START
Route::get('/admin/panel', 'Admin\AdminController@panel')
    ->name('adminPanel')
    ->middleware('web', 'auth', 'locale')
    ->prefix('{locale}')
    ->where(['locale' => '[a-zA-Z]{2}']);

Route::get('/admin/feedback/list', 'Admin\FeedbackController@list')
    ->name('feedback_list_admin')
    ->middleware('web', 'auth', 'locale')
    ->prefix('{locale}')
    ->where(['locale' => '[a-zA-Z]{2}']);

Route::get('/admin/feedback/{id}', 'Admin\FeedbackController@get')
    ->name('feedback_admin')
    ->middleware('web', 'auth', 'locale')
    ->prefix('{locale}')
    ->where(['locale' => '[a-zA-Z]{2}']);

Route::post('/admin/feedback/status/{id}', 'Admin\FeedbackController@changeStatus')
    ->name('feedbackStatus')
    ->middleware('web', 'locale')
    ->prefix('{locale}')
    ->where(['locale' => '[a-zA-Z]{2}']);

//CATEGORIES
Route::get('/admin/category/list', 'Admin\CategoryController@categoriesList')
    ->name('categoriesList')
    ->middleware('web', 'auth', 'locale')
    ->prefix('{locale}')
    ->where(['locale' => '[a-zA-Z]{2}']);

Route::get('/admin/category/create', 'Admin\CategoryController@createPage')
    ->name('createCategoryPage')
    ->middleware('web', 'auth', 'locale')
    ->prefix('{locale}')
    ->where(['locale' => '[a-zA-Z]{2}']);

Route::post('/admin/category/create', 'Admin\CategoryController@create')
    ->name('createCategory')
    ->middleware('web', 'auth', 'locale')
    ->prefix('{locale}')
    ->where(['locale' => '[a-zA-Z]{2}']);

Route::get('/admin/category/update/{id}', 'Admin\CategoryController@updatePage')
    ->name('updateCategoryPage')
    ->middleware('web', 'auth', 'locale')
    ->prefix('{locale}')
    ->where(['locale' => '[a-zA-Z]{2}']);

Route::post('/admin/category/update/{id}', 'Admin\CategoryController@update')
    ->name('updateCategory')
    ->middleware('web', 'auth', 'locale')
    ->prefix('{locale}')
    ->where(['locale' => '[a-zA-Z]{2}']);

Route::post('/admin/category/delete/{id}', 'Admin\CategoryController@delete')
    ->name('deleteCategory')
    ->middleware('web', 'auth', 'locale')
    ->prefix('{locale}')
    ->where(['locale' => '[a-zA-Z]{2}']);

// PRODUCTS
Route::get('/admin/product/list', 'Admin\ProductController@list')
    ->name('productsList')
    ->middleware('web', 'auth', 'locale')
    ->prefix('{locale}')
    ->where(['locale' => '[a-zA-Z]{2}']);

Route::get('/admin/product/create', 'Admin\ProductController@createPage')
    ->name('createProductPage')
    ->middleware('web', 'auth', 'locale')
    ->prefix('{locale}')
    ->where(['locale' => '[a-zA-Z]{2}']);

Route::post('/admin/product/create', 'Admin\ProductController@create')
    ->name('createProduct')
    ->middleware('web', 'auth', 'locale')
    ->prefix('{locale}')
    ->where(['locale' => '[a-zA-Z]{2}']);

Route::get('/admin/product/update/{id}', 'Admin\ProductController@updatePage')
    ->name('updateProductPage')
    ->middleware('web', 'auth', 'locale')
    ->prefix('{locale}')
    ->where(['locale' => '[a-zA-Z]{2}']);

Route::post('/admin/product/update/{id}', 'Admin\ProductController@update')
    ->name('updateProduct')
    ->middleware('web', 'auth', 'locale')
    ->prefix('{locale}')
    ->where(['locale' => '[a-zA-Z]{2}']);

Route::post('/admin/product/delete/{id}', 'Admin\ProductController@delete')
    ->name('deleteProduct')
    ->middleware('web', 'auth', 'locale')
    ->prefix('{locale}')
    ->where(['locale' => '[a-zA-Z]{2}']);

//ASSORTIMENT
Route::get('/admin/assortiment/list/{id}', 'Admin\AssortimentController@list')
    ->name('assortimentList')
    ->middleware('web', 'auth', 'locale')
    ->prefix('{locale}')
    ->where(['locale' => '[a-zA-Z]{2}']);

Route::get('/admin/assortiment/create/{id}', 'Admin\AssortimentController@createPage')
    ->name('createAssortimentPage')
    ->middleware('web', 'auth', 'locale')
    ->prefix('{locale}')
    ->where(['locale' => '[a-zA-Z]{2}']);

Route::post('/admin/assortiment/create/{id}', 'Admin\AssortimentController@create')
    ->name('createAssortiment')
    ->middleware('web', 'auth', 'locale')
    ->prefix('{locale}')
    ->where(['locale' => '[a-zA-Z]{2}']);

Route::get('/admin/assortiment/update/{id}', 'Admin\AssortimentController@updatePage')
    ->name('updateAssortimentPage')
    ->middleware('web', 'auth', 'locale')
    ->prefix('{locale}')
    ->where(['locale' => '[a-zA-Z]{2}']);

Route::post('/admin/assortiment/update/{id}', 'Admin\AssortimentController@update')
    ->name('updateAssortiment')
    ->middleware('web', 'auth', 'locale')
    ->prefix('{locale}')
    ->where(['locale' => '[a-zA-Z]{2}']);

Route::post('/admin/assortiment/delete/{id}', 'Admin\AssortimentController@delete')
    ->name('deleteAssortiment')
    ->middleware('web', 'auth', 'locale')
    ->prefix('{locale}')
    ->where(['locale' => '[a-zA-Z]{2}']);
