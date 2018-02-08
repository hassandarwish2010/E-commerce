<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StyleDetails extends Model
{
    //
    protected $fillable=
    [
        'style_details_type',
        'style_details_value'
    ];
    public function products()
    {
        return $this->belongsToMany('App\Product','product_style_details','product_id','style_details_id');
    }
}
