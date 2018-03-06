<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $fillable = [
        'img_name','media_id','media_type'
    ];

    public function haveimages()
    {
        return $this->morphTo();
    }
    
}
