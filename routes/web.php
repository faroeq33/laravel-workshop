<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index')->name('home');

Route::get('products/{product}/delete', 'ProductController@delete')->name(
    'products.delete'
);
Route::resource('/products', 'ProductController');

Route::get('categories/{category}/delete', 'CategoryController@delete')->name(
    'categories.delete'
);

Route::resource('/categories', 'CategoryController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['role:sales|admin']], function () {
    Route::get(
        'categories/{category}/delete',
        'CategoryController@delete'
    )->name('categories.delete');
    Route::resource('/categories', 'CategoryController');
});