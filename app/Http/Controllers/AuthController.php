<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function welcome()
    {
        $user['first_name'] = request('first_name');
        $user['last_name'] = request('last_name');
        return view('welcome', compact('user'));
    }
}
