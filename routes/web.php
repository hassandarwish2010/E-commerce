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
//Route::get('test','SellerController@index');
Route::get('/home', 'HomeController@index')->name('home');

//Route::get ( '/product', 'CartController@getIndex' )->name('product');

Route::get ( '/',[
    'uses' => 'CartController@getIndex',
    'as' => 'product'] );

<<<<<<< HEAD

Route::get('/test', function () {
    return view('test');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::get ( '/product', 'CartController@getIndex' )->name('product');
Route::get ( '/',['uses' => 'CartController@getIndex','as' => 'product'] );
Route::post ( '/login', 'MainController@login' )->name('login');
Route::post ( '/register', 'MainController@register' )->name('register');
Route::get ( '/logout', 'MainController@logout' )->name('logout');
=======
Route::post('/test','SellerController@test')->name('test');
Route::get ('/home', 'HomeController@index')->name('home');
Route::get ('/product', 'CartController@getIndex' )->name('product');
Route::get ('/',['uses' => 'CartController@getIndex','as' => 'product'] );
Route::post('/login', 'MainController@login' )->name('login');
Route::post('/register', 'MainController@register' )->name('register');
Route::get ('/logout', 'MainController@logout' )->name('logout');
>>>>>>> 8bffa27201ffc14165e22e79768d795ad3641c80


Route::get('seller', function () {
    return view('seller.index');
});
<<<<<<< HEAD
Route::get ('/seller/showproduct/{categ_name}/{group_name}',[
=======
Route::get ( '/seller/showproduct/{Categ_name}',[
>>>>>>> 8bffa27201ffc14165e22e79768d795ad3641c80
    'uses' => 'ProductsController@index',
    'as' => 'showproduct'] );


//Route::get ( '/seller/showproduct/{Categ_name}', 'ProductsController@index')->name('showproduct');
<<<<<<< HEAD
Route::get ('/seller/showproduct/products/addproducts/{categ_name}/{group_name}/{comp_id}','ProductsController@stylesAndMater')->name('addproduct');
Route::resource ('/products','ProductsController');
Route::delete ('products/{id}','ProductsController@destroy');
Route::get('/show/{categ_name}/{group_name}',[
    'as'=>'show',
=======
//Route::get ('addproducts','ProductsController@store')->name('addproducts');
//Route::resource ('products','ProductsController');
Route::delete ('/seller/showproduct/deleteproduct/{id}','ProductsController@destroy')->name('deleteproduct');
Route::get('/test/{categ_name}/{group_name}',[
    'as'=>'test',
>>>>>>> 8bffa27201ffc14165e22e79768d795ad3641c80
    'uses'=>'ProductController@index']);



    
<<<<<<< HEAD
//Route::get ( '/seller/showproduct/{Categ_name}',['uses' => 'ProductsController@index','as' => 'showproduct'] );
=======
Route::get ( '/seller/showproduct/{Categ_name}',['uses' => 'ProductsController@index','as' => 'showproduct'] );
>>>>>>> 8bffa27201ffc14165e22e79768d795ad3641c80



Route::post ('/seller/showproduct/products',['uses'=>'ProductsController@store','as'=>'products']);
Route::put ('/editproduct/{id}',['uses'=>'ProductsController@update','as'=>'editproduct']);
//Route::post ('add',['uses'=>'ProductsController@create','as'=>'add']);



/////////////////test//////////////////////////
Route::get('ajaxImageUpload', ['uses'=>'AjaxImageUploadController@ajaxImageUpload']);
Route::post('ajaxImageUpload', ['as'=>'ajaxImageUpload','uses'=>'AjaxImageUploadController@ajaxImageUploadPost']);


Route::get('images-upload', 'HomeController@imagesUpload');

Route::post('images-upload', 'HomeController@imagesUploadPost')->name('images.upload');
