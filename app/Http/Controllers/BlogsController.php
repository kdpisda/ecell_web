<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;

class BlogsController extends Controller
{
    public function getBlogsList(){
        $posts_list = DB::table('posts')->where(
                'status','=','PUBLISHED'
            )->get();
        return $posts_list->all();
    }
}
