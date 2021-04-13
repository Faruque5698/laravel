<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'cat_name', 'cat_desc', 'status',
    ];

    public function products(){
        return $this->hasMany(Product::class);
    }
}
