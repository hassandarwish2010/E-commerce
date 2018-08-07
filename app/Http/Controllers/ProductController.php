<?php

namespace App\Http\Controllers;
use App\Category;
use App\Group;
use App\Brand;
use App\Style;
use App\Product_colors;
use App\Product_color_sizes;
use App\Size;
use App\Material;
use App\Color;
use App\Product;
use App\Company;
use DB;
use App\Categ_groups;
use Illuminate\Http\Request;
use redirect;


class ProductController extends Controller
{                   
                                                     
    //
    public function category($group_name){
        $category_by_group=filter($group_name);
       $categories=$category_by_group[0]->categories;
        $arr_id=[];
        foreach($categories as $category){
            foreach($category->styles as $styles ){
                foreach($styles->products as $product){
                 $arr_id[]=$product->id;     
                }}
                }
    $products=Product::with('images')->whereIn('id',$arr_id)->get();
    //dd($category_by_group);
         return view('user.product.show',compact('category_by_group','products'));
       
    }

    public function categ_products($categ_name,$group_name){
        $category_by_group=filter($group_name);

        $products_filter=Category::where('categ_name',$categ_name)->with('styles')
       ->with(['groups'=>function($q) use($group_name){
              $q->where('group_name',$group_name);
       }])->get();

      $first=$products_filter[0]->styles;
      $arr_id=[];
                foreach($first as $styles){
                    foreach($styles->products as $style ){
                        $arr_id[]=$style->id;     }
                        }
     $products=Product::with('images')->whereIn('id',$arr_id)->get();
 //dd($products_filter);
     return view('user.product.show',compact('products','category_by_group'));

    }

    public function brandsProducts($brand_name,$group_name){
      $category_by_group=filter($group_name);

        $brands_filter=Group::with('categories')
        ->with(['brands'=>function($q) use($brand_name){
            $q->where('brand_name',$brand_name);
        }])->where('group_name',$group_name)->get();

        $category_loop=$brands_filter[0]->categories[0]->styles;
      //  dd($category_loop);
        $arr_id=[];
                 foreach($category_loop as $styles ){
                  foreach($styles->products as $prodct){
                        $arr_id[]=$prodct->id;     
                          }}
       $productwithbrands=Product::with('images')->whereIn('id',$arr_id)->get();
       return view('user.product.show',compact('productwithbrands','category_by_group'));

    //  dd($productwithbrands);
    }
  

    public function styleswProducts($style_name,$group_name){
        $category_by_group=filter($group_name);

                 $styles=DB::table('styles')
                 ->where('style_name',$style_name)
                 ->join('categories','styles.categ_id','=','categories.id')
                 ->join('categ_groups','categories.id','=','categ_groups.categ_id')
                 ->join('groups','categ_groups.group_id','=','groups.id')
                 ->join('products','styles.id','=','products.style_id')
                 ->select('products.product_serial_num AS serial')
                 ->when($style_name, function ($query) use ($group_name) {
                    return $query->where('groups.group_name', $group_name);
                })->get();
                // dd($styles);
                if(!empty($styles[0])){
                    $arr_id=[];
                    foreach($styles as $style ){
                            $arr_id[]=$style->serial;     
                             }
        //$serial_numper=$styles[0]->serial;//or possible can use id of product
        $productwithstyle=Product::with('images')->whereIn('product_serial_num',$arr_id)->get();}
        else{
            echo('No');
        } 
       return view('user.product.show',compact('productwithstyle','category_by_group'));  } 


    public function material_products($mater_name,$group_name){
        $category_by_group=filter($group_name);
    //    $m=Material::where('mater_name',$mater_name)->with('products')->get();
        $materials=DB::table('materials')
       ->where('mater_name',$mater_name)
         ->join('products','products.mater_id','=','materials.id')
         ->select('products.product_serial_num AS serial')
         ->join('styles','styles.id','=','products.style_id')
         ->join('categories','categories.id','=','styles.categ_id')
         ->join('categ_groups','categories.id','=','categ_groups.categ_id')
         ->join('groups','categ_groups.group_id','=','groups.id')
         ->when($mater_name, function ($query) use ($group_name) {
            return $query->where('groups.group_name', $group_name);
        })->get();
        
        if(!empty($materials[0])){
            $arr_id=[];
            foreach($materials as $mater ){
                    $arr_id[]=$mater->serial;     
                     }
    $productwithmaterial=Product::with('images')->whereIn('product_serial_num',$arr_id)->get();}
    else{
        echo('No');
    } 
    //dd($productwithmaterial);
    return view('user.product.show',compact('productwithmaterial','category_by_group'));

    }

    public function color_products($color_name,$group_name){
        $category_by_group=filter($group_name);
      
        $colors=DB::table('groups')->where('group_name',$group_name)
        ->join('categ_groups','categ_groups.group_id','=','groups.id')
        ->join('categories','categ_groups.categ_id','=','categories.id')
        ->join('styles','styles.categ_id','=','categories.id')
        ->join('products','styles.id','=','products.style_id')
        ->select('products.product_serial_num AS serial')
        ->join('product_colors','product_colors.product_id','=','products.id')
        ->join('colors','colors.id','=','product_colors.color_id')
        ->when($color_name, function ($query) use ($color_name) {
            return $query->where('colors.color_name', $color_name);
        }) ->get();
         //dd($colors);
         if(!empty($colors[0])){
            $arr_id=[];
            foreach($colors as $color ){
                    $arr_id[]=$color->serial;     
                     }
    $productwithcolor=Product::with('images')->whereIn('product_serial_num',$arr_id)->get();}
   
    
    return view('user.product.show',compact('productwithcolor','category_by_group'));
         
         
    }

    public function size_products($size_name,$group_name){
        $category_by_group=filter($group_name);
      
        $sizes=DB::table('groups')->where('group_name',$group_name)
        ->join('categ_groups','categ_groups.group_id','=','groups.id')
        ->join('categories','categ_groups.categ_id','=','categories.id')
        ->join('styles','styles.categ_id','=','categories.id')
        ->join('products','styles.id','=','products.style_id')
        ->select('products.product_serial_num AS serial')
        ->join('product_colors','product_colors.product_id','=','products.id')
        ->join('colors','colors.id','=','product_colors.color_id')
        ->join('product_color_sizes','color_id','=','product_color_sizes.product_colors_id')
        ->join('sizes','sizes.id','=','product_color_sizes.size_id')
        ->when($size_name, function ($query) use ($size_name) {
            return $query->where('sizes.size_name', $size_name);
        }) ->get();
       //dd($sizes);
         if(!empty($sizes[0])){
            $arr_id=[];
            foreach($sizes as $size ){
                    $arr_id[]=$size->serial;     
                     }
                     
    $productwithsize=Product::with('images')->whereIn('product_serial_num',$arr_id)->with('colors')->get();}
   
   // dd($productwithsize);
    return view('user.product.show',compact('productwithsize','category_by_group'));
         
         
    }


}
