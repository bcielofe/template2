<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    public function create_event()
    {
        return view('pages.customizable');
    }
    public function save_event(Request $request)
    {
    	$new_event = new Event();
    	$new_event->event_code = $request->event_code;
    	$new_event->event_name = $request->event_name;
    	$new_event->picture1 = $request->pic1;
    	$new_event->picture2 = $request->pic2;
    	$new_event->date = $request->date;
    	$new_event->time = $request->time;
    	$new_event->venue = $request->venue;
    	$new_event->save();

        return view('pages.preview');
    }

    public function display($event_code){
    	$event = Event::where('event_code',$event_code)->first();
    	
    	return view('pages.register',compact('event'));
    }

    public function login($event_code){
    	$event = Event::where('event_code',$event_code)->first();
    	
    	return view('pages.preview',compact('event'));
    }

    public function rsvp($event_code){
    	$event = Event::where('event_code',$event_code)->first();
    	
    	return view('pages.rsvp',compact('event'));
    }
}
