<?php

// namespace App\Http\Controllers;
use Auth;
use App\Event;
use App\Sponsor;
use App\Startup;
use App\User;
use App\Speaker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminOldController extends Controller
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
        	);
    		return view('admin.index',$data);
    	}
    	else{
    		return redirect()->route('home');
    	}
    }

    public function events (){
    	$data = Event::all();
        return view('admin.events.index', ['events' => $data]);
    }

    public function sponsors(){
        $data = Sponsor::all();
        return view('admin.sponsors.index', ['sponsors' => $data]);
    }

    public function startups(){
        $data = Startup::all();
        return view('admin.startups.index', ['startups' => $data]);
    }

    public function users(){
        $data = User::all();
        return view('admin.users.index', ['users' => $data]);
    }

    public function speakers(){
        $data = Speaker::all();
        return view('admin.speakers.index',['speakers' => $data]);
    }
}
