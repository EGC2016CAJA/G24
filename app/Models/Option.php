<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{

    protected $fillable = ['name', 'survey_id'];

    public function votes(){
        return $this->hasMany('App\Models\Vote', 'id');
    }

    public function survey(){
        return $this->belongsTo('App\Models\Survey', 'id');
    }
}
