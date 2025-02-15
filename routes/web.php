<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
        $posts = [
            'アメリカ旅行',
            '四国旅行'
        ];


    return view('index')->with(['posts'=>$posts]);
});


// Route::get('/{$post}', function() {
//     return view('show')->with(['post'=>$post]);
// });

Route::resource('posts', PostController::class);