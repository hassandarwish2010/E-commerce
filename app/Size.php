<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    //
    protected $fillable = [
        'size_name',
    ];
    public function productColors()
    {
        return $this->belongsToMany('App\ProductColor','product_color_sizes','product_colors_id','size_id');

    }
}
