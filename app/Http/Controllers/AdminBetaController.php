<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminBetaController extends Controller
{
    public function index(){
    	return view('admin_beta.index');
    }
}
