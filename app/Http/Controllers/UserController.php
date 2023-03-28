<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(){
        $data = request()->validate(
        [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ],

        [
            'name.required' => 'Name eingeben!',
            'email.required' => 'Email eingeben!',
            'password.required' => 'Passwort eingeben!',
        ]
    
    
    );

        $data['password'] = bcrypt($data['password']);

        $user = User::create($data);
        auth()->login($user);

        return redirect('/');
    }


    public function login(){

    }

    public function logout(){
        auth()->logout();

        return redirect('/');
    }


}
