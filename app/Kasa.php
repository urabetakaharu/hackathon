<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kasa extends Model
{
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
    

}