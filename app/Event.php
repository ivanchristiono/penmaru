<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['event_type_id', 'school_id', 'date_start', 'date_finish', 'time_at', 'time_until', 'staff_name', 'location', 'notes', 'is_done'];

    public function eventType(){

        return $this->belongsTo('App\EventType');
    }

    public function school(){

        return $this->belongsTo('App\School');
    }
}
