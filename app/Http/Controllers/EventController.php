<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Event;
use Storage;
use File;


class EventController extends Controller
{
    public function registry($event_id)
    {
        $event = Event::find($event_id);
        $guests = $event->going;
        return view('pages.registry', compact('guests','event'));
    }

    public function update_event(Request $request, $event_id)
    {
        $event = Event::find($event_id);
        $file1 = $request->file('pic1');
        $file2 = $request->file('pic2');
        if ($file1) {
            $ext = $file1->guessClientExtension();
            $filename1 = $request->event_code."1.$ext";

            Storage::disk('local')->put($filename1, File::get($file1));

            $event->picture1 = $filename1;
        }
        if ($file2) {
            $ext = $file2->guessClientExtension();
            $filename2 = $request->event_code."2.$ext";

            Storage::disk('local')->put($filename2, File::get($file2));
            $event->picture2 = $filename2;
        }
        $event->event_code = $request->event_code;
        $event->event_name = $request->event_name;
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

        $file1 = $request->file('pic1');
        $file2 = $request->file('pic2');
        if ($file1) {
            $ext = $file1->guessClientExtension();
            $filename1 = $request->event_code."1.$ext";

            Storage::disk('local')->put($filename1, File::get($file1));
            $new_event->picture1 = $filename1;
        }
        if ($file2) {
            $ext = $file2->guessClientExtension();
            $filename2 = $request->event_code."2.$ext";

            Storage::disk('local')->put($filename2, File::get($file2));
            $new_event->picture2 = $filename2;
        }

        $new_event->user_id = Auth::user()->id;
    	$new_event->event_code = $request->event_code;
    	$new_event->event_name = $request->event_name;
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
