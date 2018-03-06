<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;
use App\Product_colors;
use App\Company;
use App\Category;
use App\Group;
use App\Style;
use App\Seller;
use Validator;
use Redirect;
use App\Size;
use App\Color;
use App\Material;
use DB;
use App\Product_color_sizes;
use App\Media;
use App\Tag;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($categ_name,$group_name)
    { 
//   dd($categ_name);
      
      
        $products= Product::with('style')->get();

     
    //    $products= DB::table('materials')
    //    ->join('products','products.mater_id','=','materials.id')
    //    ->join('styles','styles.id','=','products.style_id')
    //    ->join('categories','categories.id','=','styles.categ_id')
    //    ->join('categ_groups','categories.id','=','categ_groups.categ_id')
    //    ->join('groups','groups.id','=','categ_groups.group_id')
    //    ->select('products.product_serial_num AS serial','products.product_desc AS desc',
    //    'products.product_price AS price','products.product_price_sale AS sale',
    //    'styles.style_name AS style','products.id','products.updated_at AS update','materials.mater_name AS material')
    
       
        
    //    ->get();
     
        return view('seller.showProducts',compact('products','categ_name','group_name',
        'styles','materials'));
        
        //return view('test',compact('pro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

     dd($request);
        request()->validate([
            'product_image' => 'required',

        ]);


        foreach ($request->file('product_image') as $key => $value) {
            $imageName = time(). $key . '.' . $value->getClientOriginalExtension();
            $value->move(public_path('images'), $imageName);
        }



        return response()->json(['success'=>'Images Uploaded Successfully.']);

    
      //Product::create($request->all());
      //$pro->save();
       return redirect()->route('addproduct');
           
    }
    public function stylesAndMater($categ_name,$group_name)
    {
        $materials=Material::all();
 
        $styles=DB::table('styles')
        ->join('categories','styles.categ_id','=','categories.id')
        ->select('styles.id','styles.style_name AS style_name')
        ->where('categories.categ_name',$categ_name)
        ->get();

        $length_values=DB::table('style_details')
        ->select('id','style_details.style_details_value AS length')
        ->where('style_details.style_details_type','Length')
        ->get();

        $neck_values=DB::table('style_details')
        ->select('id','style_details.style_details_value AS neck')
        ->where('style_details.style_details_type','Neck Style')
        ->get();

        $sleeve_values=DB::table('style_details')
        ->select('id','style_details.style_details_value AS sleeve')
        ->where('style_details.style_details_type','Sleeve Length')
        ->get();

        $occassion_values=DB::table('style_details')
        ->select('id','style_details.style_details_value AS occassion')
        ->where('style_details.style_details_type','Occassion')
        ->get();
        $sizes = Size::all();
        $colors = Color::all();
        //$productsss =Product::all();
        //$items = Product::with('colors')->get();

       return view('seller.addproducts',compact('colors','sizes','styles','materials','length_values','sleeve_values','neck_values','occassion_values','categ_name','group_name'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        // $pro =Product::with('images')->get();
        //  dd($pro[4]->images[1]->img_name);
       
        // $validator = Validator::make(Input::all(), $this->rules);
        // if ($validator->fails()) {
        //     // return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        // } else {
            $product = new Product();
            $product->style_id = $request->style_id;
            $product->product_price = $request->product_price;
            $product->product_serial_num = $request->product_serial_num;
            $product->product_desc = $request->product_desc;
            $product->product_price_sale = $request->product_price_sale;
            $product->mater_id = $request->mater_id;
            $product->comp_id = 1;
            $product->save();

            $tags=new Tag();
            $tags->tag_word = $request->tag_word;
            $tags->product_id = $product;
    
            $product_colors =new Product_colors();
            $product_colors->product_id = $product->id;
            $product_colors->color_id = $request->color_id;
            $product_colors->save();
          
             $i = 0;
            
            foreach($request->quan as $key => $quan ){
                if($request->quan[$key] != null)
                {   
                    $product_color_sizes = new Product_color_sizes();
                    $product_color_sizes->product_colors_id = $product_colors->id;
                    $product_color_sizes->size_id = $request->size[$i];
                    $product_color_sizes->quan =  $request->quan[$key];
                    $product_color_sizes->save();
                    $i += 1;
                }
            }

        if($request->hasFile('product_image')){
            foreach ($request->file('product_image') as $key => $value) {

                $imageName = time(). $key . '.' . $value->getClientOriginalExtension();
    
                $value->move(public_path('images'), $imageName);
    
                $media =new Media();
                $media->img_name = $imageName;
                $media->media_id = $product->id;
                $media->media_type = 'App\Product';
                $media->save();
    
            }
        }   
        
            // dd($media);
            // return response()->json($product);
        // }
 
       
        return response()->json(['success'=>'done']);
 
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
           
         
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            
            $product = Product::findOrFail($id);
            $product->update($request->all());
            return 'success';

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}

