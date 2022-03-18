<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HitPhrase extends Model
{
    use HasFactory;
    protected $fillable = [
        'card_id',
        'font_id',
        'text',
        'text_color',
        'text_background_color',
        'margin_top',
        'margin_bottom'
    ];
}
