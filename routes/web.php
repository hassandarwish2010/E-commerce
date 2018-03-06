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

Route::get ( '/',['uses' => 'HomeController@index','as' => 'product'] );

<<<<<<< HEAD
Route::get ( '/',['uses' => 'CartController@getIndex','as' => 'product'] );


Route::get('/test', function () { return view('test');});
Route::get('/home', 'HomeController@index')->name('home');
Route::get ( '/product', 'CartController@getIndex' )->name('product');
Route::get ( '/',['uses' => 'CartController@getIndex','as' => 'product'] );
=======

>>>>>>> edcd38eeefd00e6ef701c168d8446ceccab7bfd8
Route::post ( '/login', 'MainController@login' )->name('login');
Route::post ( '/register', 'MainController@register' )->name('register');
Route::get ( '/logout', 'MainController@logout' )->name('logout');


<<<<<<< HEAD
Route::get('seller', function () {return view('seller.index');});
Route::get ('/seller/showproduct/{categ_name}/{group_name}',['uses' => 'ProductsController@index','as' => 'showproduct'] );


//Route::get ( '/seller/showproduct/{Categ_name}', 'ProductsController@index')->name('showproduct');
Route::get ('/seller/showproduct/products/addproducts/{categ_name}/{group_name}','ProductsController@stylesAndMater')->name('addproduct');
/*Route::get ('/seller/showproduct/products/addproducts/{categ_name}/{group_name}/storeproduct',['uses'=>'ProductsController@create','as'=>'storeproduct']);*/
Route::post ('/seller/showproduct/products/addproducts/storeproduct',['uses'=>'ProductsController@store','as'=>'storeproduct']);
Route::resource ('/products','ProductsController');
Route::delete ('products/{id}','ProductsController@destroy');
Route::get('/user/show/{categ_name}/{group_name}',['as'=>'show','uses'=>'ProductController@index']);

//Route::get ( '/seller/showproduct/{Categ_name}',['uses' => 'ProductsController@index','as' => 'showproduct'] );

Route::post ('/seller/showproduct/products',['uses'=>'ProductsController@store','as'=>'products']);
Route::put ('/editproduct/{id}',['uses'=>'ProductsController@update','as'=>'editproduct']);
=======
Route::get('/show/{categ_name}/{group_name}',['as'=>'show','uses'=>'ProductController@index']);

Route::group(['middleware'=>'auth','prefix'=>'user'],function()
{
    Route::get('confirmbuy',['uses'=>"CartController@postcheckout",'as'=>'confirmbuy']);

});


Route::group(['middleware' => ['seller'],'prefix'=>'seller'], function () {
    Route::get('/', 'SellerController@index')->name('seller');
    Route::get ('/showproduct/{categ_name}/{group_name}',[
        'uses' => 'ProductsController@index',
        'as' => 'showproduct']);
        Route::post ('/addproduct/{categ_name}/{group_name}',[
            'uses' => 'ProductsController@store',
            'as' => 'addproduct']);
    Route::post ('/showproduct/products',['uses'=>'ProductsController@store','as'=>'products']);
    Route::put ('/editproduct/{id}',['uses'=>'ProductsController@update','as'=>'editproduct']);
});

//////////////////////  Cart

Route::get('addtocartt/{id}',['uses'=>"CartController@getaddtocart",'as'=>'addtocartt']);
Route::get('shoppingcart',['uses'=>"CartController@shoppingcart",'as'=>'shoppingcart']);
Route::get('remove/{id}',['uses'=>"CartController@getRemoveItem",'as'=>'remove']);
 Route::get('update/{id}',['uses'=>"CartController@getupdateItem",'as'=>'update']);
Route::get('checkout',['uses'=>"CartController@getcheckout",'as'=>'checkout']);


///////////////////////admin
Route::get('showadmin',['uses'=>"AdminController@getIndex",'as'=>'showadmin']);

Route::get('deleteuser/{id}',['uses'=>"AdminController@deleteuser",'as'=>'deleteuser']);

Route::get('showseller',['uses'=>"AdminController@getsellers",'as'=>'showseller']);

Route::get('deleteseller/{id}',['uses'=>"AdminController@deleteseller",'as'=>'deleteseller']);

Route::get('adminproducts',['uses'=>"AdminController@getproducts",'as'=>'adminproducts']);

Route::get('deleteadminprodect/{id}',['uses'=>"AdminController@deleteproduct",'as'=>'deleteadminprodect']);

Route::get('adminstting',['uses'=>"AdminController@adminsetting",'as'=>'adminstting']);








>>>>>>> edcd38eeefd00e6ef701c168d8446ceccab7bfd8

/////////////////test//////////////////////////
Route::get('ajaxImageUpload', ['uses'=>'AjaxImageUploadController@ajaxImageUpload']);
Route::post('ajaxImageUpload', ['as'=>'ajaxImageUpload','uses'=>'AjaxImageUploadController@ajaxImageUploadPost']);

Route::get('images-upload', 'HomeController@imagesUpload');

Route::post('images-upload', 'HomeController@imagesUploadPost')->name('images.upload');

<<<<<<< HEAD



=======
    
>>>>>>> edcd38eeefd00e6ef701c168d8446ceccab7bfd8
