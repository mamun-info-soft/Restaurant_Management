<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showLogin() {
        return view('front_end.users.user_login');
    }

    public function showRegistration() {
        return view('front_end.users.user_registration');
    }
}
