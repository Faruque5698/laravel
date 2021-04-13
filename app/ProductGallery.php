<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductGallery extends Model
{
    public function products(){
        return $this->belongsTo(Product::class,'product_id');
    }
}
