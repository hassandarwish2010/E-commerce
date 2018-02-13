<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Product_color_sizes extends Pivot
{
    //
    protected $table='product_color_sizes';
    protected $fillable=
    [
        'size_id',
        'product_colors_id',
        
    ];
    public function size()
    {
        return $this->belongsTo('App\Size');
    }
    public function product_color()
    {
        return $this->belongsTo('App\Product_colors');
    }

}
