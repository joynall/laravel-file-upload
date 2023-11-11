<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        if ($email === 'test@example.com' && $password === 'password') {
            return 'Login successful';
        } else {
            return 'Invalid credentials';
        }
    }
}
