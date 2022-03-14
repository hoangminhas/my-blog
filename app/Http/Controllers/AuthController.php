<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

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

        $response = $this->userService->register($request);
        return redirect()->route('login');
    }

    public function showFormLogin() {
        return view('backend.auth.login');
    }

    public function login(LoginRequest $request) {

        if($this->userService->login($request)) {
            $request->session()->push('login', true);
            return redirect()->route('blog.index');
        } else {
            $msg = 'Login Fail!';
            $request->session()->flash('login-fail', $msg);
            return redirect()->back();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
