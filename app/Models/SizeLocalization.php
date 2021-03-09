<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Size;

class SizeLocalization extends Model
{
    use HasFactory;

    use HasFactory;

    protected $fillable = [
        'color_id', 'lang', 'title'
    ];

    public $timestamps = false;

    /**
     * @return BelongsTo
     */
    public function color()
    {
        return $this->belongsTo(Size::class);
    }
}
