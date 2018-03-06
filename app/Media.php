<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $fillable = [
<<<<<<< HEAD
        'img_name','media_id','media_type'
    ];

=======
        'img_name', 'media_id','media_type'
    ];
>>>>>>> edcd38eeefd00e6ef701c168d8446ceccab7bfd8
    public function haveimages()
    {
        return $this->morphTo();
    }
<<<<<<< HEAD
    
=======
>>>>>>> edcd38eeefd00e6ef701c168d8446ceccab7bfd8
}
