<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
   /**
     * Get the comments for the blog post.
     */
    public function comments()
    {
        return $this->hasMany('App\Grade');
    }
}

