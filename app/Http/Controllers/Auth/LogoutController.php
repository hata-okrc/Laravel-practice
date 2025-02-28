<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logout(Request $req)
    {
        // 1. ユーザーをログアウトさせる
        Auth::logout();

        // 2. セッションを無効にする
        $req->session()->invalidate();

        // 3. 新しいCSRFトークンを再生成する
        $req->session()->regenerateToken();

        // 4. トップページにリダイレクトする
        return redirect()->route("posts.index");
    }
}
