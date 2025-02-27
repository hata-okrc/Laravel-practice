<?php
namespace App\Http\Controllers;


use App\Http\Requests\UserRequest;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;


class UserController extends Controller
{
    public function create() {
        return view("users.user_create");
    }

    public function register(UserRequest $req) {
        $user = new User();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->save();

        // event(new Registerd($user));

        Auth::login($user);

        return redirect()->route("posts.index");
    }
} 
