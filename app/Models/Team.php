<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function Computer(){
       return $this->belongsTo('App\Models\Computer');
    }
    public function Games(){
       return $this->belongsToMany('App\Models\Computer');
    }
    public function Players(){
       return $this->hasMany('App\Models\Computer');
    }
}
