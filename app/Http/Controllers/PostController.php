<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        //citanje iz baze
        $username='Ivan';
        $age=23;
        $posts= [
            'post1',
            'post2',
            'post3',
            'post4',
        ];
        return view('posts.index',compact('username','age','posts'));
    
    

    }

}