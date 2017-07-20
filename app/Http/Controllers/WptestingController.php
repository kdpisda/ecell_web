<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WptestingController extends Controller
{
    public function index(){
    	return view('testing.index');
    }
}
