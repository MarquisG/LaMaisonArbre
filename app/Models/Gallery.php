<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model 
{
    
    protected $table = 'gallery';
    
    public $timestamps = false;

    public function tag()
    {
        return $this->belongsToMany('App\Models\Tag');
    }

}