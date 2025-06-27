<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    public function Goals(){
       return $this->hasMany('App\Models\Computer');
    }
    public function Team(){
       return $this->belongsTo('App\Models\Computer');
    }
}
