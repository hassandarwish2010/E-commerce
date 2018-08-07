<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Color;
use App\Category;
use App\Seller;

use App\Style;
use App\Group;
use App\Product;
use App\Size;
use App\Product_colors;
use App\Product_color_sizes;
use DB;
use App\User;
use App\OrderDetails;
use Auth;

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
    //    $seller=Auth::user();
    //  dd($seller);
        
             $name=session('name');
          
             $seller=Seller::where('name','=',$name)->first();
             $seller=$seller->id;
           //  dd($seller);
             $product_num=Product::where('comp_id',$seller)->count();
          
            $totalPrice=DB::table('order_details')->where('seller_id','=',$seller)
            ->sum('order_details_price') ;
       $user=OrderDetails::with('orders')->where('seller_id','=',$seller)->get();
       $a=$user[0]->orders;
       
       $arr_id=[];
         foreach($user as $orders){
            $arr_id[]=$orders->orders->user_id;  
         }
         $users=User::whereIn('id',$arr_id)->get();
        // dd($users);
             $groups =Group::with('categories')->get();
  
        return view('seller.sellerHome',compact('groups','product_num','totalPrice','users'));
    }
  

}
