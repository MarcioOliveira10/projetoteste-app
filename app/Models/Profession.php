<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    use HasFactory;
    protected $fillable = [
        'card_id',
        'font_id',
        'photo_path',
        'photo_width',
        'round_photo',
        'name_text',
        'name_text_font_size',
        'name_text_color',
        'name_text_background_color',
        'name_text_align',
        'occupation_text',
        'occupation_text_font_size',
        'register_number_text',
        'register_number_text_font_size'
    ];
}