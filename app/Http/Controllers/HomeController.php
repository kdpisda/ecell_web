<?php

namespace App\Http\Controllers;

use App\Speaker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except' => 'index']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $speakers = Speaker::where("status","approved");
        return view('welcome',['speakers' => $speakers]);
    }

    public function welcome()
    {   
        $users = DB::table('users')->count();
        $events = DB::table('events')->count();
        return view('home',['events'=>$events,'users'=>$users]);
    }
}
