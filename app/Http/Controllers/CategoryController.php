<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($id)
    {

        $categories = Category::where('id',$id)->get();
        $products = Product::all();

        return view('categories.show')->with(compact('categories','products'));

    }
}
