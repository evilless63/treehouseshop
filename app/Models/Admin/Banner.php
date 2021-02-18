<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\LocalizedModel;

class Banner extends LocalizedModel
{
    use HasFactory;

    protected $fillable = [
        'media',
        'content',
        'is_active',
        'mobile_media',
        'link_category',
        'bannerposition',
    ];
}
