<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = [
        'categ_name',
    ];
    public function groups()
    {
        return $this->belongsToMany('App\Group','categ_groups','group_id','category_id');
    }
    public function styles()
    {
        return $this->hasMany('App\Style','categ_id');
    }
    public function products()
    {
        return $this->hasManyThrough('App\Product','App\Style','category_id','style_id','id','id');
    }
}
