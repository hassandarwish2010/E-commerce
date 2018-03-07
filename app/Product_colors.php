<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Product_colors extends Pivot
{
    //
   protected $table='product_colors';
    protected $fillable=
    [
        'color_id',
        'product_id',
    ];
  
    public function sizes()
    {
        return $this->hasMany('App\Product_color_sizes');
    } 
}
