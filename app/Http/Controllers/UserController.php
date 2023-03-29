<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function create(){
        $data = request()->validate(
        [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ],
    
        [
            'name.required' => 'Name eingeben!',
            'email.required' => 'Email eingeben!',
            'email.unique' => 'Email ist schon vergeben!',
            'password.required' => 'Passwort eingeben!',
            'password.min' => 'Passwort muss mindestens 6 Zeichen haben!'
        ]
    
    );

        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);
        auth()->login($user);

        return redirect('/');
    }

    public function login(){
        $attributes = request()->validate(
            [
                'email' => 'required|email',
                'password' => 'required'
            ],
    
            [
                'email.required' => 'Email eingeben!',
                'password.required' => 'Passwort eingeben!'
            ]
        );

        if(auth()->attempt($attributes)){
            return redirect('/');
        }
        else{
            return back()->with('fail', 'Diese Email wurde nicht registriert');
        }
    }

    public function logout(){
        auth()->logout();

        return redirect('/');
    }


}
