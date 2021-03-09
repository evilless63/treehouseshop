<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Gallery;

class Color extends LocalizedModel
{
    use HasFactory;

    protected $fillable = [
        'alias', 'hex'
    ];

    public function products() {
        return $this->belongsToMany(Product::class, 'colors_products', 'product_id', 'color_id');
    }

    public function galleries() {
        return $this->hasMany(Gallery::class);
    }
}
