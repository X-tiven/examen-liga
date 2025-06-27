<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public function Teams(){
       return $this->belongsToMany('App\Models\Computer');
    }
    public function Goals(){
       return $this->hasMany('App\Models\Computer');
    }
}
