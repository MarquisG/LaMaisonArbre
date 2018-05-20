<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appart extends Model 
{
    
    protected $table = 'apparts';
    
    public $timestamps = false;

    public function field()
    {
        return $this->hasMany('App\Models\Field');
    }

}