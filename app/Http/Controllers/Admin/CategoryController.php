<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
use File;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::paginate(5);

        return view('admin.categories.index')->with(compact('categories')); //devuelve la vista del listado de categorias
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.categories.create'); // formulario de creación categoria

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, Category::$rules, Category::$message); //hacemos la validación de datos

        $category = Category::create($request->only('name','description'));

        if($request->hasFile('image')){  //requerimiento tiene un archivo image
            $file = $request->file('image'); // el archivo  manda requerimiento a image
            $path = public_path().'/image/categories'; // la ruta donde buscar o guardar imagen
            $filename = uniqid() .'-'.$file->getClientOriginalName(); // el nombre con la cual va guardarlo en este caso la id y el nombre de la categoria
            $moved = $file->move($path,$filename); //lo mueve ylo guarda con las variables anteriores

            //se actualiza registro en la tabla product_images

            if($moved){ //si contiene la variable moved entonces se guarda.
                $category->image = $filename;
                $category->save(); //se realiza un update
            }
        }

        return redirect('/admin/categories');
    }

    public function edit(Category $category)
    {
        //

        return view('admin.categories.edit')->with(compact('category')); //devuelve el formulario de regitro a editar
    }

    public function update(Request $request, Category $category)
    {
        //

        $this->validate($request,Category::$rules,Category::$message); //validación de datos

        //realiza un update sobre la tabla category

        $category->update($request->only('name','description'));

        if($request->hasFile('image')){  //requerimiento tiene un archivo image
            $file = $request->file('image'); // el archivo  manda requerimiento a image
            $path = public_path().'/image/categories'; // la ruta donde buscar o guardar imagen
            $filename = uniqid() .'-'.$file->getClientOriginalName(); // el nombre con la cual va guardarlo en este caso la id y el nombre de la categoria
            $moved = $file->move($path,$filename); //lo mueve ylo guarda con las variables anteriores

            //se actualiza registro en la tabla product_images

            if($moved){ //si contiene la variable moved entonces se guarda.
                $category->image = $filename;
                $category->save(); //se realiza un update
            }
        }

        return redirect('/admin/categories')->with('success','Categoria modificada.');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete(); // realiza un softdelete a la tabla.. no borramos el registro
        return back();

    }
}
