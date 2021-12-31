<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function register() {

        return view('logout.registerForm');
    }

    public function register_submit() {

    }
}
