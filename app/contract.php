<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contract extends Model
{
    public function professional(){
        return $this-hasOne('App\professional');
    }
    public function userE(){
        return $this->belongsTo('App\userE');
    }
}
