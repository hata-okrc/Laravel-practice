<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;

Route::resource('posts', PostController::class);
Route::resource('posts.comments', CommentController::class)->only(["destroy", "store"]);

Route::get('users/create', [UserController::class, 'create'])->name('users.create');
Route::post('users/register', [UerController::class, 'register'])->name("users.register");
