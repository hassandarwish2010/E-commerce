<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Request;
use Session;
use App\Category;
use App\Style;
use App\Product;
use App\Cart;
use App\User;
use App\Order;
use Redirect;
use App\Product_color_sizes;
use Auth;
use DB;

use App\OrderDetails;

class CartController extends Controller
{
    public function getIndex(){

    $products=Product::all();
    return view('welcome',['products'=>$products]);
 }
//////////////////////

function shoppingcart(){
  if(!Session::has('cartt')){

      return view('user.product.shoppingcart',['products'=> null]);
  }

  $oldCartt=Session::get('cartt');
  $cart=new Cart($oldCartt);
  //dd($cart);
  return view('user.product.shoppingcart',['products'=> $cart->items,'totalPrice'=>$cart->totalPrice]);
}


function getaddtocart(Request $request,$id){
  
  $product=Product::with('style')->with('images')
  ->with('material')
  ->with('company')
  ->with('colors')
  ->with('styleDetails')
  ->where('id',$id)->first();
  //$product=$product2[0];
  //$product=Product::find($id);
  //dd($product);

 $oldCartt=Session::has('cartt') ? Session::get('cartt') : null;
 $cart=new Cart($oldCartt);    
 $cart->add($product,$product->id,$product->product_price);
 //dd($cart);
 $request->Session()->put('cartt',$cart);
//dd($request->Session()->get('cartt'));
return redirect()->route("product");
 //return response(['status'=>true,'result'=>$html]);
}


public function getRemoveItem(Request $request,$id){
  
 $oldCartt=Session::has('cartt') ? Session::get('cartt') : null;
 $cart=new Cart($oldCartt);    
 $cart->removeItem($id);
 Session::put('cartt',$cart);

 $product=Product::with('style')->with('images')
 ->with('material')
 ->with('company')
 ->with('colors')
 ->with('styleDetails')
 ->where('id',$id)->first();

 return view('user.product.shoppingcart',['products'=> $cart->items,'totalPrice'=>$cart->totalPrice]);
 //return response(['status'=>true,'result'=>$html]);

}


public function getupdateItem($id){

  $oldCart=Session::has('cartt') ? Session::get('cartt') : null;
  $cart=new Cart($oldCart);    
  $cart->updateItem($id);

  Session::put('cartt',$cart);
 
  //dd($cart);
  return view('user.product.shoppingcart',['products'=> $cart->items,'totalPrice'=>$cart->totalPrice]);
 
}




public function getcheckout(Request $request){
  //$comments = App\Post::find(1)->comments()->where('title', 'foo')->first();
 // $users=Order::find(1)->User;

if(Auth::check()){



 $users=Auth::user()->with('orders')->get();
//dd($users);

  if(!Session::has('cartt')){
    return view('user.product.shoppingcart');
  }

  $oldCartt=Session::get('cartt');
  
  $cart=new Cart($oldCartt);
  $total=$cart->totalPrice;
  


   return view('user.product.checkout',["total"=>$total,"users"=>$users]);}
    
   else{
    session()->flash("success",'your must be logged in');
    return redirect('/');
   }


}
public function postcheckout(Request $request){


  $this->validate($request,[
    'name'=>'required|regex:/^[a-zA-Z ]+$/',
   'card'=>'required|min:16|max:16|regex:/^[0-9 ]+$/',
   'cvc'=>'required|min:3|max:3|regex:/^[0-9]+$/',
   'month'=>'required|min:2|max:2',
   'year'=>'required|min:4|max:4',
   
   
  ]);


  if(!Session::has('cartt')){
    return view('user.product.shoppingcart');
  }

  $oldCartt=Session::get('cartt');
  $cart=new Cart($oldCartt);
  //dd($cart);
  $total=$cart->totalPrice;
  $quntaty=$cart->items;
  //dd($quntaty[14]);

  DB::table('orders')->insert([
    ['order_price' =>$total, 'user_id' =>Auth::id()]
]);


$orders=Order::with('users')->select('orders.id')->get();
$order_user=DB::table('orders')
->join('users','orders.user_id','=','users.id')
->select('orders.id')
->latest('orders.id')->first();
$order_id= $order_user->id;



 
 foreach($quntaty as $q){
      $qu=$q['qty'];
      $price=($q['item']['product_price']);
      $product_id=($q['item']['id']);
      $comp_id=($q['item']['comp_id']);
      
      
      // $color_size=$q['item']['colors'][0]['sizes'][0]['id'];
      // $size=$q['item']['colors'][0]['sizes'][0]['id'];
      // $color=$q['item']['colors'][0]['id'];
      
    //   $pro_color=Product_color_sizes::where('product_colors_id',$color)->where('size_id',$size)->get();
    //   $a=$pro_color[0]->id;
    //  // dd($size);
      DB::table('order_details')->insert([
        ['product_id' =>$product_id, 'order_id' =>$order_id,'order_details_quan' =>$qu, 
        'order_details_price' =>$price,"seller_id"=>$comp_id]
      ]);

}


 Session::forget("cartt");

 return redirect()->route("product")->with('success',"successfuly purched product");

}


//////////////////////////////////////////////////////////////////////////




}