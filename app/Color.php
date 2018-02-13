<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    //
    protected $fillable=
    ['color_name','color_active'];
    public function sizes()
    {
        return $this->hasMany('App\Size');
    }
}
