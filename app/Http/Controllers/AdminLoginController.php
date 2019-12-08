<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin');
//        $this->middleware('auth:admin')->except('logout');
    }

    public function showLoginForm()
    {
        return view('back_end.admins.admin.admin');
    }

    public function processLogin(Request $request)
    {
        // Validate Admin Login Data
        $this->validate($request, [
            'email' => 'required ',
            'password' => 'required | min:3'
        ]);

        //Attempt the admin log in the system
        if (!Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->back()->withInput($request->only('email'));
        }
        // If Login Successful
        return redirect()->intended(route('admin.dashboard'));
    }
}
