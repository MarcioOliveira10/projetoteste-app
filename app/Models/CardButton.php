<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardButton extends Model
{
    use HasFactory;
    protected $fillable = [
        'card_id',
        'button_type_id',
        'button_size',
        'position',
        'button_text',
        'button_value',
        'button_icon_color',
        'button_image_path'
    ];
}
