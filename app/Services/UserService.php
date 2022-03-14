<?php

namespace App\Services;

use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;

class UserService extends BaseService
{
    public $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function login($request)
    {
        $data = $request->only('email', 'password');
        if (Auth::attempt($data)) {
            return true;
        } else {
            return false;
        }
    }

    public function register($request)
    {
        $data = $request->all();
    }
}
