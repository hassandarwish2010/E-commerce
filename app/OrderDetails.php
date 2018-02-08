<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    //
    protected $fillable=
    [
        'product_id','order_details_quan',
        'order_details_price','order_id'
    ];

    public function orders()
    {
        return $this->belongsTo('App\Order','order_id');
    }
    public function products()
    {
        return $this->belongsTo('App\Product','product_id');
    }
}
