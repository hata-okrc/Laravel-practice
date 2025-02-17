<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Post;


class PostController extends Controller
{
    public function index() {

    $posts = Post::all(); 

    return view('posts.index')->with(['posts'=>$posts]);
    }

    public function show(Post $post) {
    
    return view('posts.show')->with(['post'=>$post]);
    }

    public function create() {
    return view("posts.create"); 
    }

    public function store(Request $req) {
        $post = new Post();
        $post->title = $req->title;
        $post->body = $req->body;
        $post->save();

        return redirect()->route("posts.index");
    }


}
