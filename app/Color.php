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
        return $this->belongsToMany('App\Color','product_colors','product_id','color_id');

    }
}
