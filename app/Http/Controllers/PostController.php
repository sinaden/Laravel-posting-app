<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {

        // $posts = Post::all();
        $posts = Post::paginate(3);
        return view('posts.index',['posts' => $posts]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'body' => 'required|max:5000'
        ]);

        $request->user()->posts()->create([
            'body' => $request->body
        ]);
        // $request->user()->posts()->create($request->only('body'));

        return back();
    }
}
