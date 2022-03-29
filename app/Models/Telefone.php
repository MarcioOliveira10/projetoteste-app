<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'numero_telefone'
    ];
    public function aluno()
    {
        return $this->belongsTo(Aluno::class);
    }
}
