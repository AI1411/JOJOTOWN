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
//ログインなしで閲覧可
Route::get('/', 'HomeController@index')->name('home');
Route::get('/genre/{slug}', 'GenreController@show')->name('genre.show');

Route::get('stores', 'StoreController@index')->name('store.index');
Route::get('/stores/{slug}', 'StoreController@show')->name('store.show');

Route::get('/cart', 'CartController@show')->name('cart');
Route::post('cart', 'CartController@store')->name('cart.store');
Route::post('cart/confirm', 'CartController@confirm')->name('cart.confirm');
Route::post('cart/thanks', 'CartController@thanks')->name('cart.thanks');

Route::get('product/{slug}', 'ProductController@show')->name('product.show');

//voyager
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Auth::routes();
Route::group(['middleware' => ['auth']], function (){
    Route::get('accounts', 'AccountsController@index')->name('accounts');
    Route::get('/store/create', 'StoreController@create')->name('store.create');
    Route::post('/store', 'StoreController@store')->name('store.store');
});

Route::namespace('Auth')->group(function () {
    Route::get('logout', 'LoginController@logout');
});


