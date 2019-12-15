<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function showLoginForm()
    {
        return view('back_end.admins.admin.admin');
    }
    public function processLogin(Request $request)
    {
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->intended(route('dashboard'));
        }
        return redirect()->back();
    }
    public function dashboard()
    {
        return view('back_end.dashboard.dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->intended(route('login'));
    }

}
