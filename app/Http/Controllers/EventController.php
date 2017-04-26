<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Event;


class EventController extends Controller
{
    public function registry($event_id)
    {
        $event = Event::find($event_id);
        $guests = $event->attendees;
        return view('pages.registry', compact('guests','event'));
    }

    public function update_event(Request $request, $event_id)
    {
        $event = Event::find($event_id);
        $event->event_code = $request->event_code;
        $event->event_name = $request->event_name;
        $event->picture1 = $request->pic1;
        $event->picture2 = $request->pic2;
        $event->date = $request->date;
        $event->time = $request->time;
        $event->venue = $request->venue;
        $event->save();

        return redirect('myevents');
    }

    public function edit_event($event_id)
    {
        $event = Event::find($event_id);
        return view('pages.editEvent', compact('event'));
    }

    public function delete_event($event_id)
    {
        $event = Event::find($event_id);
        $event->delete();
        return back();
    }

    public function show_events()
    {
        $events = Auth::user()->events;
        return view('pages.events',compact('events'));
    }
    public function create_event()
    {
        return view('pages.customizable');
    }
    public function save_event(Request $request)
    {
    	$new_event = new Event();
        $new_event->user_id = Auth::user()->id;
    	$new_event->event_code = $request->event_code;
    	$new_event->event_name = $request->event_name;
    	$new_event->picture1 = $request->pic1;
    	$new_event->picture2 = $request->pic2;
    	$new_event->date = $request->date;
    	$new_event->time = $request->time;
    	$new_event->venue = $request->venue;
    	$new_event->save();

        return redirect('myevents');
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
