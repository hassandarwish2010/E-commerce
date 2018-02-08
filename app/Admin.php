<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //
    protected $fillable = [
        'name', 'email', 'password','comp_id'
    ];
    public function companies()
    {
        return $this->belongsTo('App\Company','comp_id');
    }
}
