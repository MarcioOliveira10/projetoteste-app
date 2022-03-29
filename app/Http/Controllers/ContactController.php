<?php

namespace App\Http\Controllers;
use App\Models\Person;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function home()
    {
        $person = Person::all();
        dd($person);
    }  
    
}
