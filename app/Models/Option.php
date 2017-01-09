<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{

    protected $fillable = ['name', 'survey_id'];

    public function votes(){
        $this->hasMany('App\Models\Vote', 'id');
    }

    public function survey(){
        $this->belongsTo('App\Models\Survey', 'id');
    }
}
