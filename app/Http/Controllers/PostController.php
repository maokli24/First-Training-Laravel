<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; // just like require in native php

class PostController extends Controller
{
    public function index(){
        $allPosts =[
            ['id'=>1,'title'=>'MVC Pattern','posted_by'=>'Ahmed','created_at'=>'2020-04-03'],
            ['id'=>2,'title'=>'Artisan Commands','posted_by'=>'Mohammed','created_at'=>'2020-04-06'],
            ['id'=>3,'title'=>'Schedule Jobs','posted_by'=>'Ali','created_at'=>'2020-04-20'],
            ['id'=>4,'title'=>'Architecture','posted_by'=>'Ibrahim','created_at'=>'2020-04-28']
           
        ];
        $postsFromDB = Post::all();
        return view('index',['posts'=>$allPosts]);
    }
}
