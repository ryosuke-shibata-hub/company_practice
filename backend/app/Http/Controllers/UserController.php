<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function index() {
        return view('login.User.userCreate');
    }

    public function store(Request $request) {

        $request->validate([
            'name' => 'required','string','max:10','unique',
            'email' => 'required','email','string','unique',
            'password' => 'required','min:3','max:10','confirmed',
            'role' => 'required',
        ]);

        $user = new User();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = bcrypt($request->password);
        $data['admin_role'] = $request->role;

        $user->fill($data)->save();

        return redirect('/companies');
    }
}
