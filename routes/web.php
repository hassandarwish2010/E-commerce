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
/*
Route::get('/', function () {
    return view('welcome');
});*/
/*
Auth::routes();
*/
Route::get('/home', 'HomeController@index')->name('home');

Route::get ( '/product', 'CartController@getIndex' )->name('product');

Route::get ( '/',[
    'uses' => 'CartController@getIndex',
    'as' => 'product'] );
Route::post ( '/login', 'MainController@login' )->name('login');
Route::post ( '/register', 'MainController@register' )->name('register');
Route::get ( '/logout', 'MainController@logout' )->name('logout');
<<<<<<< HEAD

Route::get('seller', function () {
    return view('seller.index');
});
=======
>>>>>>> af97f820ce1282db7a8f6d015aa8d17a6a3ee1bf
