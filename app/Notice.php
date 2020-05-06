<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Notice extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public static $message = [

        'name.required' => 'Es necesario agregar un nombre al la  categoria',
        'name.min' => 'El nombre de la categoria debe contener al menos 3 caracteres...',
        'description.min' => 'hey, el maximo de caracteres son 200...',
        'url.required'=>'Es mecesario una URL...'
    ];
    public static $rules = [

        'name' => 'required |min: 3 ',
        'description' => 'max:1000 ',
        'url' =>'required| min:3'
    ];


    protected $fillable = ['name', 'description','url'];

    public function getFeaturedImageUrlAttribute()
    {
        if ($this->image)
            return '/image/news/' . $this->image;
        //else
        $firstProduct = $this->products()->first();
        if ($firstProduct)
            return $firstProduct->featured_image_url;
        //
        return '/image/loaderp.gif';
    }
}
