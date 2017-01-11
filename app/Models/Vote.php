<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $fillable = ['user_id', 'option_id'];
    public $hidden = ['user_id', 'created_at'];

    public function user(){

        return $this->belongsTo('App\Models\User', 'id');
    }

    public function option(){

        return $this->belongsTo('App\Models\Option', 'id');
    }

}
