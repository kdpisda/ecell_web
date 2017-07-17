<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {   
        $this->middleware('auth');
        //$this->middleware('auth_panel:'+$request->user()->user_type);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        return view('home');
    }

    public function admin_panel()
    {
        $events = DB::table('events')->count();
        // $startups = DB::table('startups')->count();
        $users = DB::table('users')->count();
        // $blogs = DB::table('blogs')->count();
        return view('home',['users' => $users, 'events' => $events]);
    }

    public function coordinator_panel()
    {
        var_dump('Coordinator Panel');   
    }

    public function executive_panel()
    {
        var_dump('Executive Panel');
    }

    public function manager_panel()
    {
        var_dump('Manager Panel');
    }

    public function ambassador_panel()
    {
        var_dump('Ambassador Panel');
    }

    public function my_profile(){
        return view('profile');
    }
}
