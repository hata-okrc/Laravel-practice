<?php

namespace App\Http\Controllers;

use  App\Models\Post;
use App\Http\Requests\PostRequest;


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

    public function store(PostRequest $req) {

        $post = new Post();
        $post->title = $req->title;
        $post->body = $req->body;
        $post->save();

        return redirect()->route("posts.index");
    }
    public function edit(Post $post) {
        return view("posts.edit")->with(["post"=>$post]);
    }

    public function update(PostRequest $req, Post $post) {

        $post->title = $req->title;
        $post->body = $req->body;
        $post->save();

        return redirect()->route("posts.show", $post);
    
    }

    public function destroy(Post $post) {
        $post->delete();

       return redirect()->route("posts.index");
    }

}
