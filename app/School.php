<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = ['name', 'address', 'city_id', 'phone', 'website', 'email'];

    public function city(){

        return $this->belongsTo('App\City');
    }

    public function event(){

        return $this->hasMany('App\Event');
    }
}
