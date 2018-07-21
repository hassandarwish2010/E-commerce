<?php

namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\User;
    use App\Seller;
    use App\Product;
    use App\Contact;
    class AdminController extends Controller
    {
        
        public function getIndex(){
           
              $users=User::all();
              $arr=array('users'=>$users);
              
              return view('admin.admin_show',$arr);
           }
    
           
           public function deleteuser($id){
        
            $users=User::find($id)->delete();
            
       
            
            return redirect('showadmin');
         }
    
    
         /////sellers
    
         public function getsellers(){
           
            $sellers=Seller::all();
            $arr=array('sellers'=>$sellers);
            return view('admin.sellers',$arr);
         }
    
         public function deleteseller($id){
        
            $sellers=Seller::find($id)->delete();
            
       
            
            return redirect('showseller');
         }
    
    
         //products
         public function getproducts(){
           
            $products=Product::all();
            $arr=array('products'=>$products);
            return view('admin.admin_products',$arr);
         }
    
         public function deleteproduct($id){
        
            $products=Product::find($id)->delete();
            
       
            
            return redirect('adminproducts');
         }
    
         public function adminsetting(){
        
            $product=Product::all()->count();
            $seller=Seller::all()->count();
            $user=User::all()->count();
       
          // $arr=array('product'=>$product);
          // dd($arr);
           return view('admin.admin_setting',['product'=>$product,'user'=>$user,'seller'=>$seller]);
         }
    

         public function getmassages(){
        
            $massages=Contact::all();
           
       
           $arr=array('massages'=>$massages);
          // dd($arr);
           return view('admin.massages',$arr);
    }


    public function deletemassage($id){
        
        $massages=Contact::find($id)->delete();
        
   
        
        return redirect('massages');
     }
    

    }