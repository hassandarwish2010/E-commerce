<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductColor extends Model
{
    //
    protected $fillable=
    [
        'product_id','color_id','product_color_active'
    ];
    public function sizes()
    {
        return $this->belongsToMany('App\Size','product_color_sizes','product_colors_id','size_id');

    }

}
