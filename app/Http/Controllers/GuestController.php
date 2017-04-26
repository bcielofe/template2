<?php

namespace App\Http\Controllers;
use App\Guest;
use App\Event;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function create_guest(Request $request, $event_code)
    {
    	$new_guest = new Guest();
    	$new_guest->first_name = $request->first_name;
    	$new_guest->last_name = $request->last_name;
    	$new_guest->username = $request->username;
    	$new_guest->password = $request->pwd;
    	$new_guest->phone_number = $request->phone;
    	$new_guest->save();

    	$event = Event::where('event_code',$event_code)->first();

        return redirect($event_code.'/login');
    }
    public function login_guest(Request $request, $event_code)
    {
    	$guest = Guest::where(['username'=>$request->username],['password'=>$request->password])->first();
    	if($guest)
    		return redirect('rsvp/'.$event_code);
    	else
    		return back();
    }
}
