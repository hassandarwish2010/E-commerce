<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
//use App\Http\Request;
use Session;
use App\Cart;
use App\Category;
use App\Style;
use App\Product;


class CartController extends Controller
{
    public function getIndex(){
   
    $products=Product::all();
    //$lastproduct=Product::find(1);
    return view('welcome',['products'=>$products]);
 }
}
