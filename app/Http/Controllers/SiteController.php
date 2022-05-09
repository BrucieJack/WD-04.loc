<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class SiteController extends Controller
{
    public function index(){

        $product = Product::find(1);
        // dump($product);

        $categories = Category::where('parent_id', 0)->get();
        return view('site.index', compact('categories'));
    }
}
