<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class logoImage extends Model
{
    use HasFactory;
    protected $fillabel =[
        'image_path',
        'position',
        'width',
        'activate_animation',
        'margin_top',
        'margin_bottom',
        'margin_top_mobile',
        'margin_bottom_mobile',
        'is_template'
    ];
}
