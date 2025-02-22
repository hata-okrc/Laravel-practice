<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use App\Models\Post;

class CommentController extends Controller

{
    public function store(CommentRequest $req, Post $post ) {

        $comment = new Comment();
        $comment->comment = $req->comment;
        $comment->post_id = $post->id;
        $comment->save();

        return redirect()->route("posts.show", $post);
    }
}
