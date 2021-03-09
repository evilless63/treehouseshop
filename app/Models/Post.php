<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends LocalizedModel
{
    use HasFactory;

    protected $fillable = [
        'id',
        'alias',
        'for_visitors',
        'about_company',
        'status'
    ];
}
