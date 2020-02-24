<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Product;
use App\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $product = Product::find($id);
        $images = $product->images()->orderBy('featured','desc')->get(); //ordena las imagenes por el menor a mayor

        return view('admin.products.images.index')->with(compact('product','images'));
    }

    public function store(Request $request , $id)
    {
        //guarda la imagen a nuestro producto

        $file = $request->file('photo'); //guarda en formato file , extrae la información photo
        $path = public_path().'/image/products'; //ruta donde guardamos la imagenes
        $fileName = uniqid() . $file->getClientOriginalName(); //el nombre se compone de una id concadenado con el nombre del producto
        $moved = $file->move($path, $fileName); // se indica a que ruta se guarda con el archivo y nombre

        //crear 1 registro en la tabla product_images


        if($moved){

            $productImage = new ProductImage();
            $productImage->image =$fileName;
            $productImage->product_id = $id;
            $productImage->save(); //registra la imagen a la bd

        }

        return back();
    }

    public function destroy(Request $request, $id)
    {

        //eliminar el archivo
        $productImage = ProductImage::find($request->image_id);
        if (substr($productImage->image, 0, 4) === "http") {

            $deleted = true;
        } else {
            $fullPath = public_path() . '/image/products/' . $productImage->image;
            $deleted = File::delete($fullPath);
        }



        //eliminar el registro en la base de datos
        if ($deleted) {
            $productImage->delete();
        }

        return back()->with('success','Se ha borrado la imagen');
    }

    public function select($id,$image)

    {
        ProductImage::where('product_id',$id)->update(['featured' => false]);

        $productImage = ProductImage::find($image);
        $productImage->featured = true;
        $productImage->save();

        return back();

    }

}
