<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CatalogController extends Controller
{
    public function index(){
        $products = Product::paginate();
        $products = $products->concat(Product::all())
        ->concat(Product::all())
        ->concat(Product::all())
        ->concat(Product::all())
        ->concat(Product::all())
        ->concat(Product::all())
        ->concat(Product::all())
        ->concat(Product::all());

        return view('catalog.catalog', compact('products'));
    }
}
