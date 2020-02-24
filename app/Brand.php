<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public static $message = [

        'name.required' => 'Es necesario agregar un nombre',
        'name.min' => 'El nombre  debe contener al menos 3 caracteres...',
        'description.max' => 'hey, el maximo de caracteres son 200...',
        'description.min' =>'Debe tener por lo menos una descripción breve...',
    ];
    public static $rules = [

        'name' => 'required |min: 3 ',
        'description' => 'max:500 ',
        'description' => 'required |min: 100'
    ];



    protected $fillable = ['name', 'description'];
    protected $guarded =['id','image'];



    public function getFeaturedImageUrlAttribute()
    {
        if ($this->image)
            return '/image/brand/' . $this->image;
        //else
        $firstProduct = $this->products()->first();
        if ($firstProduct)
            return $firstProduct->featured_image_url;
        //
        return '/image/loaderp.gif';
    }
}
