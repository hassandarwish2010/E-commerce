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
<<<<<<< HEAD
//Route::get('test','SellerController@index');
Route::get('/home', 'HomeController@index')->name('home');

//Route::get ( '/product', 'CartController@getIndex' )->name('product');

Route::get ( '/',[
    'uses' => 'CartController@getIndex',
    'as' => 'product'] );

=======
Route::post('/test','SellerController@test')->name('test');
Route::get('/home', 'HomeController@index')->name('home');
Route::get ( '/product', 'CartController@getIndex' )->name('product');
Route::get ( '/',['uses' => 'CartController@getIndex','as' => 'product'] );
>>>>>>> c5a7d29d41c5d3630c3ab926973a1a55623a626e
Route::post ( '/login', 'MainController@login' )->name('login');
Route::post ( '/register', 'MainController@register' )->name('register');
Route::get ( '/logout', 'MainController@logout' )->name('logout');


Route::get('seller', function () {
    return view('seller.index');
});
<<<<<<< HEAD
Route::get ( '/seller/showproduct/{Categ_name}',[
    'uses' => 'ProductsController@index',
    'as' => 'showproduct'] );
//Route::get ( '/seller/showproduct/{Categ_name}', 'ProductsController@index')->name('showproduct');
//Route::get ('addproducts','ProductsController@store')->name('addproducts');
Route::resource ('/products','ProductsController');
Route::delete ('products/{id}','ProductsController@destroy');
Route::get('/test/{categ_name}/{group_name}',[
    'as'=>'test',
    'uses'=>'ProductController@index']);



    
=======
Route::get ( '/seller/showproduct/{Categ_name}',['uses' => 'ProductsController@index','as' => 'showproduct'] );



Route::post ('/seller/showproduct/products',['uses'=>'ProductsController@store','as'=>'products']);
Route::put ('/editproduct/{id}',['uses'=>'ProductsController@update','as'=>'editproduct']);
Route::get ('/seller/showproduct/products/addproduct',['uses'=>'ProductsController@showadd','as'=>'addproduct']);



/////////////////test//////////////////////////
Route::get('ajaxImageUpload', ['uses'=>'AjaxImageUploadController@ajaxImageUpload']);
Route::post('ajaxImageUpload', ['as'=>'ajaxImageUpload','uses'=>'AjaxImageUploadController@ajaxImageUploadPost']);


Route::get('images-upload', 'HomeController@imagesUpload');

Route::post('images-upload', 'HomeController@imagesUploadPost')->name('images.upload');
>>>>>>> c5a7d29d41c5d3630c3ab926973a1a55623a626e
