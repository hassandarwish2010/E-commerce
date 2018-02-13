<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    //
    protected $fillable=
    ['color_name','color_active'];
    public function products()
    {
        return $this->belongsToMany('App\Product','productColors','product_id','color_id');

    }
    public function sizes()
    {
        return $this->belongsToMany('App\Size','product_color_sizes','product_color_id','size_id');

    }
}
