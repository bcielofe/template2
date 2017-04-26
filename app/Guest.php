<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    public function events(){
    	return $this->belongsToMany('App\Event','guests_events','guest_id','event_id');
    }

    public function set_response($event_id,$response){
    	return $this->events()->attach([$event_id => ['response' => $response]]);
    }

    public function update_response($event_id,$response){
    	return $this->events()->withPivot([$event_id => ['response' => $response]]);
    }

     public function remove_event($event_id){
    	return $this->events()->detach($event_id);
    }
}
