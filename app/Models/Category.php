<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['type_category', 'name',  'describe'];

    function products()
    {
        return $this->hasMany(Product::class, 'category_id');
    }
}
