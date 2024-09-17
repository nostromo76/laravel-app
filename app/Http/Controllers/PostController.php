<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required|string|min:5|max:255',
            'content' => 'required|string|min:10',
        ]);

        // Store data in the database
        Post::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ]);

        // Redirect or return a response
        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }

    // Other methods (show, edit, update, destroy) can be implemented as needed

    public function show(Post $post){
       // $post=Post::findorFail($id);
        return view('posts.show',['post'=>$post]);

    }

    public function edit(Post $post){
        return view('posts.edit',['post'=>$post]);
    }
    public function update(Request $request, Post $post)
{
    // Validate the incoming request data
    $validated = $request->validate([
        'title' => 'required|string|min:5|max:255',
        'content' => 'required|string|min:10',
    ]);

    // Update the post with the validated data
    $post->update($validated);

    // Redirect to the posts index page
    return redirect()->route('posts.index');
}

public function destroy(Post $post)
{
    $post->delete();
    return to_route('posts.index');
}


}
