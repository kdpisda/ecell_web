<?php

namespace App\Http\Controllers;
use Auth;
use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

	/*
		Middleware Auth so that if a user is not logged it must be
		thrown away from here.
	*/

	public function __construct(){
		$this->middleware('auth');
	}


    public function index(){
    	$user = Auth::user();
    	if($user->user_type == "ADMIN"){
    		$data = array(
	    		'users' => DB::table('users')->count(),
	        	'events' => DB::table('events')->count(),
	        	'sponsors' => DB::table('sponsors')->count(),
	        	'startups' => DB::table('startups')->count(),
	        	'admin_event' => route('admin_events'),
        	);
    		return view('admin.index',$data);
    	}
    	else{
    		return redirect()->route('home');
    	}
    }

    public function events (){
    	$data = Event::all();
    	$admin_event = route('admin_events');
        return view('admin.events.index', ['events' => $data,'admin_event'=>$admin_event]);
    }
}
