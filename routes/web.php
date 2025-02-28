<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;

Route::resource('posts', PostController::class);
Route::resource('posts.comments', CommentController::class)->only(["destroy", "store"]);

Route::get('create', [RegisterController::class, 'showRegisterPage'])->name("showRegisterPage");
Route::post('register', [UerController::class, 'register'])->name("register");


// ログインのルート
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);

// ログアウトのルート
Route::post('logout', [LogoutController::class, 'logout'])->name('logout');