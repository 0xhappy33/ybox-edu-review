<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
      'name','description','birthday','gender','address','phone','specialize','image','identity_card','email'
    ];

    public function organizations(){
        return $this->belongsToMany('App\Organization');
    }

    public function reviews(){
        return $this->hasMany('App\Review');
    }
}
