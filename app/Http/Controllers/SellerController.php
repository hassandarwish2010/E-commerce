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
    public function index()
    {
       /* $colors=DB::table('sizes')
        ->join('product_colors_sizes','product_colors_sizes.size_id', '=', 'sizes.id')
        ->get();*/
        
        //$colors = new Illuminate\Database\Eloquent\Builder( $query );
        //$colors->setModel( new Color );
        /*$colors=Color::select('id','color_name');
        $categ_id = Category::where('categ_name','=','Dresses')->value('id');
        $products= Product::with('colors');*/
        //$colors=Product_color_sizes::with('size')->get();

        /*SELECT product_color_sizes.product_colors_id ,sizes.size_name
FROM sizes join product_color_sizes on product_color_sizes.size_id=sizes.id*/
        
        //returns product_colors.id
        /*$colors=DB::table('product_color_sizes')
        ->join( 'product_colors','product_colors.id','=','product_color_sizes.product_colors_id')
        ->select('product_colors.id')
        ->where('product_colors.id','=',1)->get();*/
        
        /*$colors=DB::table('product_color_sizes')
        ->join( 'sizes','product_color_sizes.size_id','=','sizes.id')
        ->select('product_color_sizes.product_colors_id','sizes.size_name')->get();*/

        

        $colors=DB::table('colors')
        ->join('product_colors','colors.id','=','product_colors.color_id')
        ->join('product_color_sizes','product_colors.id','=','product_color_sizes.product_colors_id')
        ->join('sizes','product_color_sizes.size_id','=','sizes.id')
        ->join('products','product_colors.product_id','=','products.id')
        ->select('colors.color_name AS col','sizes.size_name As si','product_colors.product_id As pro','products.style_id As sty')
        ->get();



        return view ('test',compact('colors'));

    }
    public function test(Request $request){
    return view('home',compact('request'));
    }
}
