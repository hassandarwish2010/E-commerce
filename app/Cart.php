<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //
    public $items= null;
    public $totalQty= 0;
    public $totalPrice= 0;
   
   
     public function __construct($oldCartt){
         if($oldCartt){
   $this->items=$oldCartt->items;
   $this->totalQty=$oldCartt->totalQty;
   $this->totalPrice=$oldCartt->totalPrice;
   
         }
     }
   
     public function add($item,$id){
   
       $storedItem=['qty'=>0,'price'=>$item->product_price,'item'=>$item];
       if($this->items){
           if(array_key_exists($id,$this->items)){
               $storedItem=$this->items[$id];
           }
       }
       $storedItem['qty']++;
       $storedItem["price"]=$item->product_price*$storedItem['qty'];
       $this->items[$id]=$storedItem;
       $this->totalQty++;
       $this->totalPrice+=$item->product_price;
     }
   
   
     public function removeItem($id){
   
       $this->totalQty -= $this->items[$id]['qty'];
       $this->totalPrice -= $this->items[$id]['price'];
       unset($this->items[$id]);
   
     }
   
   
   
   
     public function updateItem($id){
         
       $this->items[$id]['qty']++;
     $this->items[$id]['price']=$this->items[$id]['qty']*$this->items[$id]['item']['product_price'];
     
     
       $this->totalQty++;
     
       $this->totalPrice+= $this->items[$id]['item']['product_price'];
      
    
   
      }
}
