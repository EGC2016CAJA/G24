<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{

    public function options(){
        return $this->hasMany('App\Models\Option', 'id');
    }
}
