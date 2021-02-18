<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Product;

class ProductLocalization extends Model
{
    use HasFactory;

    protected $fillable = [
        'page_id', 'lang', 'title', 'content', 'keywords','description', 'details', 'composition_and_care'
    ];

    public $timestamps = false;
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
