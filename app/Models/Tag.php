<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model 
{
    
    protected $table = 'tag';
    
    public $timestamps = false;

    public function gallery()
    {
        return $this->belongsToMany('App\Models\Gallery');
    }

}