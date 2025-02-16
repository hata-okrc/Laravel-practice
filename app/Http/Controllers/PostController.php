<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index() {

    $posts = [
        'アメリカ旅行',
        '四国旅行'
    ];

    return view('posts.index')->with(['posts'=>$posts]);

    }

    public function show($post) {

    return view('posts.show')->with(['post'=>$post]);

    }
}
