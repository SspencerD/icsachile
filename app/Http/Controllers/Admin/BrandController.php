<?php

namespace App\Http\Controllers\Admin;

use App\Brand;
use App\File;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all();
        return view('admin.brands.index')->with(compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brands.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, Brand::$rules, Brand::$message);

        $brand = Brand::create($request->only('name','description'));

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $path = public_path() . '/image/brand';
            $fileName = uniqid() . '-' . $file->getClientOriginalName();
            $moved = $file->move($path, $fileName);

            if ($moved) {
                $brand->image = $fileName;
                $brand->save();
            }
        }
        return redirect('/admin/brands')->with('success','Creación realizada');
    }

    public function edit(Brand $brand)
    {

        return view('admin.brands.edit')->with(compact('brand'));
    }

    public function update(Request $request, Brand $brand)
    {

        $this->validate($request, Brand::$rules, Brand::$message);

        $brand->update($request->all());

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $path = public_path() . '/image/brands';
            $fileName = uniqid() . '-' . $file->getClientOriginalName();
            $moved = $file->move($path, $fileName);

            if ($moved) {
                $previousPath = $path . '/' . $brand->image;
                $brand->image = $fileName;
                $saved = $brand->save();

                if ($saved)
                    File::delete($previousPath);
            }
        }
        return redirect('/admin/brands');
    }

    public function destroy(Brand $brand)
    {
        $brand->delete();
        return back()->with('success','se ha eliminado correctamente');
    }
}
