<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function attendees(){
    	return $this->belongsToMany('App\Guest','guests_events','event_id','guest_id');
    }

    public function going(){
    	return $this->attendees()->wherePivot('response','Yes');
    }
}
