<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class professional extends Model
{
    public function contract(){
        return $this->belongsTo('App\contract');
    }
    
}
