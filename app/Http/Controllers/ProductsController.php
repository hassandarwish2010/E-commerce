<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
use App\Product;
use App\Product_colors;
use App\Product_style_details;
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
         $groups =Group::with('categories')->get();

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

        return view('seller.showProducts',compact('groups','products','categ_name','group_name'));
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($categ_name,$group_name)
    {


        $materials=Material::all();
 
        // $styles=DB::table('styles')
        // ->join('categories','styles.categ_id','=','categories.id')
        // ->select('styles.id','styles.style_name AS style_name')
        // ->where('categories.categ_name',$categ_name)
        // ->get();
       $styles=Style::all();

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
        $sizes  = Size::all();
        $colors = Color::all();
        $groups = Group::with('categories')->get();
        //$productsss =Product::all();
        //$items = Product::with('colors')->get();

       return view('seller.addproducts',compact('groups','colors','sizes','styles','materials','length_values','sleeve_values','neck_values','occassion_values','categ_name','group_name'));
    
           
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        // dd($request->all());
        // $pro =Product::with('images')->get();
        //  dd($pro[4]->images[1]->img_name);
       
        // $validator = Validator::make(Input::all(), $this->rules);
        // if ($validator->fails()) {
        //     // return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        // } else {
            $this->validate(request(),[
                'style_id'=>'required',
                'product_price'=>'required',
                'product_serial_num'=>'required|unique:products',
                'product_desc'=>'required',
                'comp_id'=>'required',
                'tag_word'=>'required',
                'product_price_sale'=>'required',
                'color_id'=>'required',
                'product_image'=>'required|min:3',
                'quan'=>'required'
              
                
            ]);
            $product = new Product();
            $product->style_id = $request->style_id;
            $product->product_price = $request->product_price;
            $product->product_serial_num = $request->product_serial_num;
            $product->product_desc = $request->product_desc;
            if($request->has('tag_word')){
            $product->tag_word = $request->tag_word;
            }
            if($request->has('product_price_sale'))
            {
            $product->product_price_sale = $request->product_price_sale;
            }
            $product->mater_id = $request->mater_id;
            $product->comp_id = $request->comp_id;  
            $product->save();

           
    
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
        
        if($request->has('sleeve'))
        {
            $product_style_details = new Product_style_details();
            $product_style_details->product_id = $product->id;
            $product_style_details ->style_details_id = $request->sleeve;
            $product_style_details->save();

            $product_style_details = new Product_style_details();
            $product_style_details->product_id = $product->id;
            $product_style_details ->style_details_id = $request->length;
            $product_style_details->save();

            $product_style_details = new Product_style_details();
            $product_style_details->product_id = $product->id;
            $product_style_details ->style_details_id = $request->neck;
            $product_style_details->save();

            $product_style_details = new Product_style_details();
            $product_style_details->product_id = $product->id;
            $product_style_details ->style_details_id = $request->occassion;
            $product_style_details->save();
        }
            
            // return response()->json($product);
            session()->flash("success",'your product has been added');
 return Redirect::back();
       
        // return response()->json(['success'=>'done']);
 
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,$categ_name,$group_name)
    {
       
      
        
        $product= Product::with('style')->where('id',$id)->first();
       // dd($product);
        $style_details= Product::with('styleDetails')->where('id',$id)->first();
        $product_color= Product::with('colors')->where('id',$id)->first();
    //  dd($product_color->colors);
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
       //dd($length_values);

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
       // dd( $neck_values);
        $sizes  = Size::all();
        $colors = Color::all();
        $groups = Group::with('categories')->get();
        //$productsss =Product::all();
        //$items = Product::with('colors')->get();

       return view('seller.editproducts',compact('product_color','product','style_details','groups','colors','sizes','styles','materials','length_values','sleeve_values','neck_values','occassion_values','categ_name','group_name'));
    
         
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
    //{dd($request->all());
            
            $product = Product::findOrFail($id);
            $product->update($request->all());
             session()->flash("success",'your product has been Updated');
             return Redirect::back();

    }
  

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}

