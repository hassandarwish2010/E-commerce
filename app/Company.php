<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $fillable = [
        'company_name'
    ];
    public function products()
    {
        return $this->hasMany('App\Product','comp_id');
    }
    public function admins()
    {
        return $this->hasMany('App\Admin','comp_id');
    }
}
