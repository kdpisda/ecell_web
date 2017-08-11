<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function getPagesList(){
        $pages = DB::table('pages')->where('status', '=', 'ACTIVE')->get();
        return $pages;
    }
}
