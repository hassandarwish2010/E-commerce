<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable=
    [
        'order_price','user_id'
    ];
    public function users()
    {
        return $this->belongsTo('App\User','user_id');
    }
    public function orderDetails()
    {
        return $this->hasMany('App\OrderDetails','order_id');
    }
    
}
