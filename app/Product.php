<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function categories(){
        return $this->belongsTo(Category::class,'cat_id');
    }
    public function brands(){
        return $this->belongsTo(Brand::class,'brand_id');
    }
    public function productGallery(){
        return $this->hasMany(ProductGallery::class);
    }
}
