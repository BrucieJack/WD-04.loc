<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AutController extends Controller
{
    public function login(){
        return view('my-auth.login');
    }


    public function auth(Request $request){
        // $email = $request->input('email');
        // $password = $request->input('password');
        Auth::attempt($request->only(['email', 'password']));
        // $user = User::where('email', $email)->first();
        // if ($user){
        //     if (Hash::check($password, $user->password)){
        //         echo "AUTH";
        //         Auth::login($user);
        //     }else {
        //         echo "NOT AUTH";
        //     }
        // }
    }

    public function logout(){
        Auth::logout();
    }
}
