<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;

Route::resource('posts', PostController::class);
Route::resource('posts.comments', CommentController::class)->only(["destroy", "store"]);

Route::get('/create', [RegisterController::class, 'showRegisterForm'])->name("showRegisterForm");
Route::post('/register', [RegisterController::class, 'register'])->name("register");


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('showLoginForm');
Route::post('/login', [LoginController::class, 'login'])->name("login");

Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

