<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\LocalizedModel;
use App\Models\Category;
use App\Models\Color;

class Product extends LocalizedModel
{

    use SoftDeletes;

    protected $fillable = [
        'code',
        'category_id',
        'brand_id',
        'alias',
        'status',
        'hit',
        'weight',
        'dimension_x',
        'dimension_y',
        'dimension_z',
        'sku',
    ];
    
    public function categories() {
        return $this->belongsToMany(Category::class, 'categories_products', 'category_id', 'product_id');
    }

    public function colors() {
        return $this->belongsToMany(Color::class, 'colors_products', 'color_id', 'product_id');
    }

}
