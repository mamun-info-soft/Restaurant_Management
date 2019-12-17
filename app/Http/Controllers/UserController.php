<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use mysql_xdevapi\Exception;

class UserController extends Controller
{


    public function showRegistration() {
        return view('back_end.admins.users.auth.user_registration');
    }
    public function create(Request $request)
    {
        $this->validate($request, [
            'email' => 'required | email',
            'name' => 'required',
            'password' => 'required | min: 4'
        ]);

        $userInformation = [
            'name'  => $request->post('name'),
            'email'  => $request->post('email'),
            'password'  => Hash::make($request->post('password')),
        ];

        try {
            $user = User::create($userInformation);
            return redirect()->intended(route('index'))->with('success','Congratulation!');
        }
        catch (Exception $exception){
            return redirect()->back();
    }
    }

    public function showLogin() {
        return view('back_end.admins.users.auth.user_login');
    }

    public function processLogin(Request $request)
    {
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required : min: 4'
        ]);

        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->intended(route('user.dash'));
        }

        return redirect()->back();
    }
    public function uDash()
    {
        return view('back_end.admins.users.users');
    }

    public function cLogout()
    {
        Auth::logout();
        return redirect()->intended(route('index'));
    }

}
