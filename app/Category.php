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
        return $this->belongsToMany('App\Group','categ_groups','group_id','categ_id')->with('brands');
    }
    public function styles()
    {
        return $this->hasMany('App\Style','categ_id')->with('products');
    }
    
}
