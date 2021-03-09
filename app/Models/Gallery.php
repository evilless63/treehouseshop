<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Color;

class Gallery extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'product_id',
        'color_id',
        'img',
    ];

    public function producColor() {
        return $this->belongsTo(Color::class);
    }
}
