<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function showFormSignup() {
        return view('backend.auth.signup');
    }

    public function signup(Request $request) {
        $validation = $request->validate([
            'name'=>'bail|required',
            'email'=>'bail|required|email|unique:users',
            'password'=>'bail|required|min:6',
            'confirmPassword'=>'bail|required|same:password'
        ]);
// dd($request);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role_id = $request->role_id;
        $user->email_verified_at = now();
        $user->save();
        return redirect()->route('login');
    }

    public function showFormLogin() {
        return view('backend.auth.login');
    }

    public function login(LoginRequest $request) {
        $user = $request->except("_token");
        // dd($user);
        if(Auth::attempt($user)) {
            return redirect()->route('blog.index');
        } else {
            return redirect()->back();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
