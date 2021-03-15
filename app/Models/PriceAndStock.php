<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriceAndStock extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = "products_colors_sizes_price_stock";
}
