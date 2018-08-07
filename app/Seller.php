<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Seller extends Authenticatable
{
    //
    use Notifiable;
    protected $guard='seller';
    protected $fillable = [
        'name', 'email', 'password','phone','address'
    ];
    public function products()
    {
        return $this->hasMany('App\Product','comp_id');
    }
    public function orders_details()
    {
        return $this->hasMany('App\OrderDetails','seller_id');
    }

    protected $hidden = [
        'password', 'remember_token',
    ];
}
