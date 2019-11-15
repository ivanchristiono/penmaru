<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventType extends Model
{
    protected $fillable = ['name', 'description'];

    public function event(){

        return $this->hasMany('App\Event');
    }
}
