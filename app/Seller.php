<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    //
    protected $fillable = [
        'name', 'email', 'password','comp_id','phone'
    ];
    public function companies()
    {
        return $this->belongsTo('App\Company','comp_id');
    }
}
