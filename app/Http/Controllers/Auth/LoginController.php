<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');  // ログインしていないユーザーのみがアクセス可能
    }

    public function showLoginForm()
    {
        return view('users.login');
    }

    public function login(Request $req)
    {
        // 1. リクエストのデータを検証する
        $credentials = $req->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
        // 2. 認証を試みる
        if (Auth::attempt($credentials, $req->filled('remember'))) {
            // 認証に成功したら、セッションを再生成する
            $req->session()->regenerate();

            return redirect()->route("posts.index");
        }

        // 認証に失敗した場合は、ログインページにリダイレクトする
        return back()->withErrors([
            'email' => 'ログイン情報が正しくありません。',
        ]);
        // ->onlyInput('email');
    }
}
