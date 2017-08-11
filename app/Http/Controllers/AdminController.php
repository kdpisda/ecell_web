<?php

namespace App\Http\Controllers;
use Auth;
use App\Event;
use App\Sponsor;
use App\Startup;
use App\User;
use App\Speaker;
use App\QuestionSet;
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use sendotp\sendotp;

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
                'speakers' => DB::table('speakers')->count(),
                'questionSets' => QuestionSet::all(),
        	);
    		return view('admin.index',$data);
    	}
    	else{
    		return redirect()->route('home');
    	}
    }

    public function events (){
        $user = Auth::user();
        if($user->user_type == "ADMIN"){
            $data = Event::all();
            return view('admin.events.index', ['events' => $data,'questionSets' => QuestionSet::all()]);
        }else{
            return redirect()->route('home');
        }
    }

    public function sponsors(){
        $user = Auth::user();
        if($user->user_type == "ADMIN"){
            $data = Sponsor::all();
            return view('admin.sponsors.index', ['sponsors' => $data,'questionSets' => QuestionSet::all()]);
        }else{
            return redirect()->route('home');
        }
    }

    public function startups(){
        $user = Auth::user();
        if($user->user_type == "ADMIN"){
            $data = Startup::all();
            return view('admin.startups.index', ['startups' => $data,'questionSets' => QuestionSet::all()]);
        }else{
            return redirect()->route('home');
        }
    }

    public function users(){
        $user = Auth::user();
        if($user->user_type == "ADMIN"){
            $data = User::all();
            return view('admin.users.index', ['users' => $data,'questionSets' => QuestionSet::all()]);
        }else{
            return redirect()->route('home');
        }       
    }

    public function speakers(){
        $user = Auth::user();
        if($user->user_type == "ADMIN"){
            $data = Speaker::all();
            return view('admin.speakers.index',['speakers' => $data,'questionSets' => QuestionSet::all()]);
        }else{
            return redirect()->route('home');
        }     
    }

    public function questionSets(){
        $user = Auth::user();
        if($user->user_type == "ADMIN"){
            $data = QuestionSet::all();
            return view('admin.questionSets.index',['questionSets' => $data,'questionSets' => QuestionSet::all()]);
        }else{
            return redirect()->route('home');
        }
    }

    public function questions(){
        $user = Auth::user();
        if($user->user_type == "ADMIN"){
            $questionSets = QuestionSet::all();
            $questions = Question::all();
            return view('admin.questions.index',['questions' => $questions,'questionSets' => $questionSets]);
        }else{
            return redirect()->route('home');
        }
    }

    public function addEvent(){
        $user = Auth::user();
        if($user->user_type == "ADMIN"){
            return view('admin.events.add');
        }else{
            return redirect()->route('home');
        }
    }

    public function editEvent($id){
        $user = Auth::user();
        if($user->user_type == "ADMIN"){
            $event = Event::where('event_id',$id)->first();
            return view('admin.events.edit',['event' => $event]);
        }else{
            return redirect()->route('home');
        }
    }
}