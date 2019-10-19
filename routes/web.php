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
Route::get('/store/{slug}', 'StoreController@show')->name('store.show');
Route::get('/cart', 'CartController@show')->name('cart');

//voyager
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Auth::routes();
Route::group(['middleware' => ['auth']], function (){
    Route::get('accounts', 'AccountsController@index')->name('accounts');
});

Route::namespace('Auth')->group(function () {
    Route::get('logout', 'LoginController@logout');
});


