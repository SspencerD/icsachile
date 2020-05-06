<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function index()
    {
        $notices = Notice::paginate(5);

        return view('admin.news.index')->with(compact('notices')); //devuelve la vista del listado de categorias
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.news.create'); // formulario de creación categoria

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, Notice::$rules, Notice::$message); //hacemos la validación de datos

        $notice = Notice::create($request->all());

        if($request->hasFile('image')){  //requerimiento tiene un archivo image
            $file = $request->file('image'); // el archivo  manda requerimiento a image
            $path = public_path().'/image/news'; // la ruta donde buscar o guardar imagen
            $filename = uniqid() .'-'.$file->getClientOriginalName(); // el nombre con la cual va guardarlo en este caso la id y el nombre de la categoria
            $moved = $file->move($path,$filename); //lo mueve ylo guarda con las variables anteriores

            //se actualiza registro en la tabla product_images

            if($moved){ //si contiene la variable moved entonces se guarda.
                $notice->image = $filename;
                $notice->save(); //se realiza un update
            }
        }

        return redirect('/admin/news')->with('success','Noticia  creada.');
    }

    public function edit(Notice $notice)
    {
        //

        return view('admin.news.edit')->with(compact('notice')); //devuelve el formulario de regitro a editar
    }

    public function update(Request $request, Notice $notice)
    {
        //

        $this->validate($request,Notice::$rules,Notice::$message); //validación de datos

        //realiza un update sobre la tabla Notice

        $notice->update($request->all());

        if($request->hasFile('image')){  //requerimiento tiene un archivo image
            $file = $request->file('image'); // el archivo  manda requerimiento a image
            $path = public_path().'/image/news'; // la ruta donde buscar o guardar imagen
            $filename = uniqid() .'-'.$file->getClientOriginalName(); // el nombre con la cual va guardarlo en este caso la id y el nombre de la categoria
            $moved = $file->move($path,$filename); //lo mueve ylo guarda con las variables anteriores

            //se actualiza registro en la tabla product_images

            if($moved){ //si contiene la variable moved entonces se guarda.
                $notice->image = $filename;
                $notice->save(); //se realiza un update
            }
        }

        return redirect('/admin/news')->with('success','Noticia  modificada.');


    }

    public function destroy(Notice $notice)
    {
        $notice->delete(); // realiza un softdelete a la tabla.. no borramos el registro
        return back()->with('success','producto eliminado con exito');

    }
}

