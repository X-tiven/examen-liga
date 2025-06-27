<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    public function Game(){
       return $this->belongsTo('App\Models\Computer');
    }
    public function Player(){
       return $this->belongsTo('App\Models\Computer');
    }
}
