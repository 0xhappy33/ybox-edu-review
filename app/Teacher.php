<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public function organizations(){
        return $this->belongsToMany('App\Organization');
    }

    public function reviews(){
        return $this->hasMany('App\Review');
    }
}
