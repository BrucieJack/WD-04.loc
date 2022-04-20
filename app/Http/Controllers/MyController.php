<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function myPage(){
        $name = "Bliznets Nikita Vladimirovich";
        return view('my-auth.login', [
            'myName' => $name   
        ]);
    }
}
