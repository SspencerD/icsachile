<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    //de productos a imagenes

    public static $message = [

    ];

    public static $rules = [


    ];


    protected $fillable = [
        'code', 'name', 'description', 'category_id',
        'provider', 'cod_provider', 'unit_mesure', 'lot_provider', 'price',
        'price_buy', 'quantity','long_description'
    ];
    protected $guarded = ['id'];

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function getFeaturedImageUrlAttribute()
    {
        $featuredImage = $this->images()->where('featured', true)->first();

        if (!$featuredImage)
            $featuredImage = $this->images()->first();

        if ($featuredImage) {

            return $featuredImage->url;
        }

        //default
        return  'image/default.png';
    }

    public function getCategoryNameAttribute()
    {
        if ($this->category)
            return $this->category->name;

        return 'Sin Categorizar';
    }
}
