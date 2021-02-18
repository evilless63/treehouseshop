<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Admin\LocalizedModel;
use App\Models\Admin\Product;

class Category extends LocalizedModel
{

    use SoftDeletes;

    protected $fillable = [
        'id',
        'title',
        'alias',
        'parent_id',
        'in_header',
        'keywords',
        'description',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    


    /**
     * for search category children in edit category
     */
    public function children()
    {
        return $this->hasMany('App\Models\Admin\Category','parent_id');
    }


    public function products() {
        return $this->belongsToMany(Product::class, 'categories_products', 'product_id', 'category_id');
    }

}
