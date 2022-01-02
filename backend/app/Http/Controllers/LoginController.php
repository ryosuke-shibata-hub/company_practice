<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    //
      public function login()
    {
        //
        return view('logout.LoginForm');
    }

    public function login_submit(Request $request) {

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = $request->password;

        if(Auth::attempt($data)) {
            return redirect('/companies');
        }
            return back()
            ->with('login_error','＊The registered information is different');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
