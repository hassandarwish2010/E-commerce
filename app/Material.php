<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    //
    protected $fillable=
    [
        'mater_name'
    ];
    public function products()
    {
        return $this->hasMany('App\Product','mater_id');
    }
}
