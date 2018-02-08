<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Style extends Model
{
    //
    protected $fillable=
    [
        'style_name','style_desc','style_active','categ_id'
    ];
    
    public function categories()
    {
        return $this->belongsTo('App\Category','categ_id');
    }
    public function products()
    {
        return $this->hasMany('App\Product','style_id');
    }

}
