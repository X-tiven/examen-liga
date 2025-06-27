<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class President extends Model
{
    public function Team(){
       return $this->hasOne('App\Models\Computer');
    }
}
