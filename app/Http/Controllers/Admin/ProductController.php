<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $productos = Product::paginate(10);
        $categories = Category::orderBy('name')->get();
        return view('admin.products.index')->with(compact('productos', 'categories')); // devolvera la vista del listado de productos
    }

    public function create()
    {

        $categories = Category::orderBy('name')->get();
        return view('admin.products.create')->with(compact('categories'));   // devolvera el formulario de registro
    }

    public function store(Request $request) //inyección de dependencia de Laravel
    {
        // registrar el nuevo producto a la bd

        /* dd($request->all()); */

        $this->validate($request, Product::$rules, Product::$message);  //hacemos validación de datos

        $producto = new Product;
        $producto = Product::create($request->all());
        $producto->save(); //se guarda.


        return redirect('/admin/products')->with('success', 'Producto Ingresado Correctamente');
    }

    public function edit($id)
    {
        $categories = Category::orderBy('name')->get();
        $producto = Product::find($id);
        return view('admin.products.edit')->with(compact('producto', 'categories'));   // devolvera el formulario de registro a editar
    }

    public function update(Request $request,  Product $producto) //inyección de dependencia de Laravel
    {

        $this->validate($request, Product::$rules, Product::$message);  //hacemos validación de datos

        $producto->update($request->all());
        $producto->save(); //realiza un insert sobre la tabla Product.

        return redirect('/admin/products')->with('success', 'Se ha editado con exito.');
    }

    public function destroy($id) //inyección de dependencia de Laravel
    {

        $producto = Product::find($id);
        $producto->delete(); //realiza un Update sobre la tabla Product.

        return back();
    }
}
