<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Group;
use App\Style;
use App\Seller;
use Validator;
use Redirect;
use DB;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($categ_name,$group_name)
    {
        //dd($categ_name);
        //$categ_id=Category::where('categ_name','=',$Categ_name)->value('id');
        //$products=Product::with('style.category')->get();
       // $productss=Product::with('colors')>get();
       /*SELECT sellers.comp_id
        from sellers
        WHERE sellers.email='gerges@gmail.com'*/
        $comp_id=Seller::where('sellers.email','=','gerges@gmail.com')->value('comp_id');

       /*SELECT products.product_serial_num,products.product_desc,products.product_price,products.product_price_sale,materials.mater_name,
styles.style_name
       from materials
       JOIN products ON products.mater_id=materials.id
       JOIN styles ON styles.id=products.style_id
       JOIN categories ON categories.id=styles.categ_id
       JOIN categ_groups ON categories.id=categ_groups.categ_id
       JOIN groups ON groups.id=categ_groups.group_id
       WHERE groups.group_name='Woman'
       AND categories.categ_name='Dresses'
       and products.comp_id=1*/

       

      


       $products=DB::table('materials')
       ->join('products','products.mater_id','=','materials.id')
       ->join('styles','styles.id','=','products.style_id')
       ->join('categories','categories.id','=','styles.categ_id')
       ->join('categ_groups','categories.id','=','categ_groups.categ_id')
       ->join('groups','groups.id','=','categ_groups.group_id')
       ->select('products.product_serial_num AS serial','products.product_desc AS desc',
       'products.product_price AS price','products.product_price_sale AS sale',
       'styles.style_name AS style','products.id','products.updated_at AS update','materials.mater_name AS material')
       ->where('products.comp_id',$comp_id)
       ->when($categ_name, function ($query) use ($group_name) {
             $query->where('groups.group_name', $group_name);
                    
        })
       ->get();
       
        return view('seller.showProducts',compact('products','categ_name','group_name','comp_id','styles','materials'));
        //return view('test',compact('pro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
       //dd('hhh');
      Product::create($request->all());
      //$pro->save();
       return redirect()->route('addproduct');
           
    }
    public function stylesAndMater($categ_name)
    {
        $materials=DB::table('materials')
        ->select('materials.mater_name')->get();
 
        $styles=DB::table('styles')
        ->join('categories','styles.categ_id','=','categories.id')
        ->select('styles.style_name AS style_name')
        ->where('categories.categ_name',$categ_name)
        ->get();
       return view('seller.addproducts',compact('styles','materials'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   /* public function store(Request $request)
    {
       /* $validator = Validator::make(Input::all(), $this->rules);
        if ($validator->fails()) {
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        } else {
            $product = new Product();
            $product->style_id = 1;
            $product->product_price = $request->product_price;
            $product->product_serial_num = $request->product_serial_num;
            $product->product_desc = $request->product_desc;
            $product->product_quan = $request->product_quan;
            $product->mater_id = 1;
            $product->comp_id = 1;
            $product->save();
            return response()->json($product);
        }*/
 
        /*$input = $request->all();
        Product::create($input);
        return response()->json(['success'=>'done']);
 
    }*/



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}

