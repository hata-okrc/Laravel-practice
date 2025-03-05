<?php

namespace App\Http\Controllers;

use  App\Models\Post;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index() {

    $posts = Post::all(); 

    return view('posts.index')->with(['posts'=>$posts]);
    }

    public function show(Post $post) {
        $file = Post::files()->findOrFail($post->id);
        $filePath = storage_path('app/public/' . $file->path);

        if (file_exists($filePath)) {
            return response()->file($filePath, [
                'Content-Type' => $file->mime_type,
            ]);
    return view('posts.show')->with(['post'=>$post]);
    }

    public function create() {
    return view("posts.create"); 
    }

    public function store(Request $req) {
        $req->validate([
            "title" => "required|unique:posts",
            "body" => "required",
            // 'file' => 'required|file|max:10240|mimes:jpg,jpeg,png,pdf,doc,docx'
        ]);

        $post = new Post();
        $post->title = $req->title;
        $post->body = $req->body;
        $post->save();

            if($req->hasFile('file')) {
                $file = $req->file('file');
                $originalName = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '_' . uniqid() . '.' . $extension;
                $path = $file->storeAs(
                'uploads/' . Post::id(), // ポストごとのディレクトリに収納
                    $filename);

                    $uploadedFile =  File::create([
                        'original_name' => $originalName,
                        'path' => $path,
                        'mime_type' => $file->getClientMimeType(),
                        'size' => $file->getSize(),
                        'post_id'=>$post->id,
                    ]);
                };
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
