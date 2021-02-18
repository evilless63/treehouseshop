<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Admin\LocalizedModel;
use App\Models\Admin\Category;

class Product extends LocalizedModel
{

    use SoftDeletes;

    protected $fillable = [
        'category_id',
        'brand_id',
        'title',
        'alias',
        'content',
        'price',
        'old_price',
        'status',
        'keywords',
        'description',
        'img',
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

}
