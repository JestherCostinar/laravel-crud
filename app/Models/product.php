<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'product_name',
        'product_description',
        'price',
        'image',
        'is_published'
    ];
    
    protected $attributes = [
        'is_published' => true
    ];
}
