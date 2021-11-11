<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // protected $table = "products";
    protected $fillable = ['title', 'type', 'cooking_time', 'weight', 'description', 'image'];
}
