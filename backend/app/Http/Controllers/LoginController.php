<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
      public function login()
    {
        //
        return view('logout.LoginForm');
    }

    public function login_submit(Request $request) {
        return redirect('/companies');
    }
}
