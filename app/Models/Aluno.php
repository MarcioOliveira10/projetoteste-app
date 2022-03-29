<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'id',
        'name',
        'last_name',
        'age' 

    ];
    public function telefone()
    {
        return $this->hasOne(Telefone::class);
    }
}
