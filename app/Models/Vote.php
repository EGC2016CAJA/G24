<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $fillable = ['user_id'];

    public function user(){

        return $this->belongsTo('App\Models\User', 'id');
    }

    public function option(){

        return $this->belongsTo('App\Models\Option', 'id');
    }

}
