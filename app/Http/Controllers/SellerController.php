<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Color;
use App\Category;
use App\Style;
use App\Product;
use App\Size;
use App\Product_colors;
use App\Product_color_sizes;
use DB;

//use Illuminate\Database\Eloquent\Builder;

class SellerController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('seller');
    }
    /**
     * show dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$seller=auth()->guard('admin')->user();
        
            // $name=session('name');
            // $seller=Seller::where('name','=',$name)->get();
            // Product::where(['comp_id'=>1])
            // select count(*) FROM products 
            // WHERE products.comp_id=1
            $product_num=DB::table('products')
            ->where('comp_id','=', 1)->count();

        return view('seller.sellerHome',compact('product_num'));
    }
  

}
