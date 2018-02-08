<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable=
    [
        'product_serial_num','style_id',
        'product_price','product_desc',
        'product_price_sale','product_quan',
        'mater_id','comp_id'
    ];
    public function styles()
    {
        return $this->belongsTo('App\Style','style_id');
    }
    public function materials()
    {
        return $this->belongsTo('App\Material','mater_id');
    }
    public function companies()
    {
        return $this->belongsTo('App\Company','comp_id');
    }
    public function colors()
    {
        return $this->belongsToMany('App\Color','productColors','product_id','color_id');

    }
    public function styleDetails()
    {
        return $this->belongsToMany('App\StyleDetails','product_style_details','product_id','style_details_id');
    }
    public function orderDetails()
    {
        return $this->hasMany('App\OrderDetails','product_id');
    }
}
