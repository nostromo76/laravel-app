<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Make sure to import Auth

class LoginUserController extends Controller
{
    public function login()
    {
     return view ('login');
    }

    public function store(Request $request)
    {
    
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout(); // Log out the user
        $request->session()->invalidate(); // Invalidate the session
        $request->session()->regenerateToken(); // Regenerate the CSRF token

        return to_route('posts.index'); // Redirect to posts index
    }
}

