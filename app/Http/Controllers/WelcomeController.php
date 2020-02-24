<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WelcomeController extends Controller
{

    public function welcome()
    {
        $categories = Category::all();
        $products = Product::limit(5); //traemos solo producto con categoria tapones
        $marcas = Brand::all();

        return view('welcome')->with(compact('products', 'marcas', 'categories'));
    }

    public function somos()
    {
        return view('somos');
    }
    public function postventa()
    {
        return view('postventa');
    }

    public function contacto()
    {
        return view('contacto');
    }

    public function enviar(Request $request)
    {
        $subject ="$request->input('asunto')";
        $for ="$request->input('correo')";
        Mail::send('contact',$request->all(), function($msj) use($subject,$for){
            $msj->from('sspencer@corchera.cl','Industria Corchera S.A');
            $msj->subject($subject);
            $msj->to($for);
        });
        return redirect()->back()->with('success','Correo enviado!');

    }
}
