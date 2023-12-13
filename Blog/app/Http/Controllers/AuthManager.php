<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthManager extends Controller
{
    function loginPost(Request $r) {
        $r->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $r->only('email', 'password');
        if(Auth::attempt($credentials)){
            return redirect()->intended(route('auth'));
        }
            return redirect()->intended(route('auth'))->with("error","Login details aren't valide");
        
    }

    function registerPost(Request $r) {
        $r->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        $data['name'] = $r->name;
        $data['email'] = $r->email;
        $data['password'] = Hash::make($r->password);
        $u = User::create($data);

        if(!$u){
            return redirect()->intended(route('auth'))->with("error","Registration failed, try again.");
        }
            return redirect()->intended(route('auth'));
    }

    function logout(){
        Session::flush();
        Auth::logout();
        return redirect()->intended(route('auth'))->with("success","You've been loged out successfully");
    }
}
