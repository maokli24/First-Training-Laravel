<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; // just like require in native php

class PostController extends Controller
{
    public function index(){
        $postsFromDB = Post::all();
        return view('index',['posts'=>$postsFromDB]);
    }
}
