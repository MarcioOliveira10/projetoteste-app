<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'person_id',
        'city',
        'street',
        'number',
        'zip_code',
    ];
        
        //public function person()
        //{
        //   return $this->belongsTo(Person::class, 'person_id');
        //}
    public function person()
    {
        return $this->belongsTo('App\Models\Person', 'person_id', 'id');
    }

}
