<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\AjaxImage;
use Validator;

use App\Product;

class AjaxImageUploadController extends Controller
{
	/**
     * Show the application ajaxImageUpload.
     *
     * @return \Illuminate\Http\Response
     */
    public function ajaxImageUpload()
    {
    	return view('ajaxImageUpload');
    }


    /**
     * Show the application ajaxImageUploadPost.
     *
     * @return \Illuminate\Http\Response
     */
    public function ajaxImageUploadPost(Request $request)
    {
      $validator = Validator::make($request->all(), [
        'title' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);
 

      if ($validator->passes()) {

        $input = $request->all();
        $input['image'] = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $input['image']);


        AjaxImage::create($input);
      /*  $product = new Product();
        $product->style_id = 1;
        $product->product_price = $request->product_price;
        $product->product_serial_num = $request->product_serial_num;
        $product->product_desc = $request->desc;
        $product->product_quan = $request->product_quan;
        $product->mater_id = 1;
        $product->comp_id = 1;
        $product->save();*/
        Product::create($input);
        return response()->json(['success'=>'done']);
        //return view ('test',compact('input'));
      }

     // return view ('test',compact('input'));
      //return response()->json(['error'=>$validator->errors()->all()]);
    }
}