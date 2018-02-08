<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    //
    protected $fillable=
    ['brand_name'];
    public function groups()
    {
        return $this->belongsToMany('App\Group','group_brands','group_id','brand_id');
    }
}
