<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    //
    public function register(Request $req){
        return view('users.register');
    }
    public function login(Request $req){
        return view('users.login');
    }
    public function store(Request $req) {
        $user = new User;
        $user->name = $req->input('name');
        $user->email = $req->input('email');
        $user->password = Hash::make($req->input('password'));
        $user->save();
        Auth::login($user);
        return redirect(route('login'));
    }
    public function profile(Request $req) {
        return redirect(route('homepage'));
        //return view('users.profile');
    }
    public function logout(Request $req) {
        Auth::logout();
        return redirect(route('login'));
    }
    public function authenticate(Request $req){
        $credentials=$req->only('email','password');
        if(Auth::attempt($credentials)){
            return redirect()->intended('perfil');
        }
    }
}
