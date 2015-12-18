<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    //this is where relationships are defined   /**
    
    public function comments()
    {
        return $this->hasMany('App\Table');
    }
}
