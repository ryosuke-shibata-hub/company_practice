<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    //
    public function register() {

        return view('logout.registerForm');
    }

    public function register_submit(Request $request) {

        $user = new User();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = bcrypt($request->password);

        $user->fill($data)->save();

        return redirect()->route('register_added')
        ->with($request->all('name'));
    }

    public function register_added(Request $request) {

        return view('logout.registerAdded');
    }
}
