<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userE extends Model
{
    public function contract(){
        return $this->hasMany('App\contract');
    }
}
