<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //protected $table = "categorias";
    protected $guarded = [];

    public function products() {
    	return $this->hasMany(Product::class, "category_id");
    }
}
