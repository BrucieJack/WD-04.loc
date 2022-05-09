<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function add(Request $request){
        $cart = $request->session()->get('cart', []) ;
        $productId = $request->input('id');
        dump($productId);
        if (isset($cart[$productId])){
            $cart[$productId] += 1;
        }else{
            $cart[$productId] = 1;
        }
        Session::put('cart', $cart);
        return response($cart);
    }
}
