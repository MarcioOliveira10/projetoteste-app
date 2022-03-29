<?php

use App\Mail\newContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Models\Person;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

if(\Illuminate\Support\Facades\App::environment('local')){

    Route::get('/sendmail', function(){
       $person = \App\Models\Person::factory()->make();
       Mail::to($person)
            ->send(new newContactMail($person));
        return null;
    });
}