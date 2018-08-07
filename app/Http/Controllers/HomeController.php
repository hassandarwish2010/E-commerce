<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Group;
use App\Category;
use App\Style;
use DB;
use App\Categ_groups;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    
    {
        
        // $product=array();
        $products2=Product::with('images')->get();
           $products=Product::with('images')
            ->with('style')
            ->with('material')
            ->with('company')
            ->with('colors')
            ->with('styleDetails')
           ->paginate(8);
        
            $productsDb=DB::table('products')
            ->join('styles','products.style_id','=','styles.id')
            ->join('categories','categories.id','=','styles.categ_id')
            ->join('categ_groups','categ_groups.categ_id','=','categories.id')
            ->join('groups','groups.id','=','categ_groups.group_id')
            ->join('brands','brands.id','=','groups.id')
           
            ->get();
        
            return view('welcome',compact('products','products2','categories'));
           
    }

    public function imagesUpload()

    {

        return view('imagesUpload');

    }



    

    public function imagesUploadPost(Request $request)

    {

        request()->validate([

            'uploadFile' => 'required',

        ]);



        foreach ($request->file('uploadFile') as $key => $value) {

            $imageName = time(). $key . '.' . $value->getClientOriginalExtension();

            $value->move(public_path('images'), $imageName);
            

        }



        return response()->json(['success'=>'Images Uploaded Successfully.']);

    }
}



