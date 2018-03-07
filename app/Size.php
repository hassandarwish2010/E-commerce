<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    //
    //protected $table='sizes';
    protected $fillable = [
        'size_name',
    ];
    public function productColors()
    {
        return $this->hasMany('App\Product_color_sizes');

    }
     
}

























