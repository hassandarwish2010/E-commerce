<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    //
    protected $fillable=
    ['color_name'];
   
    public function products()
    {
        return $this->belongsToMany('App\Color','product_colors','product_id','color_id');

    }
<<<<<<< HEAD
    
    public function sizes()
    {
        return $this->belongsToMany('App\Size','product_color_sizes','product_colors_id','size_id'); 

=======
    public function sizes()
    {
        return $this->belongsToMany('App\sizes','product_color_sizes','product_colors_id','size_id');
>>>>>>> edcd38eeefd00e6ef701c168d8446ceccab7bfd8
    }
}
