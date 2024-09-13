<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; // Make sure to import the Post model

class PostController extends Controller
{
    public function index(){
        // Reading from database
        $username = 'Ivan';
        $age = 23;
        $posts = [
            'post1',
            'post2',
            'post3',
            'post4',
        ];
        return view('posts.index', compact('username', 'age', 'posts'));
    }

    public function create(){
        return view('posts.create');
    }

    public function show(){
        return view('posts.show');
         // Remove quotes to pass the actual object nema sta da pokaze pa sam izbrisao
         //data
    
    }

    public function edit(){
        return view('posts.edit');
    }
}
