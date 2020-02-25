<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function show($id)
    {
        $products = Product::find($id);
        $images = $products->images;

        return view('products.show')->compact('products','images');

    }
}
