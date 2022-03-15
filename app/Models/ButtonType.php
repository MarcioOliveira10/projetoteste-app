<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ButtonType extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'icon'
    ];
}
