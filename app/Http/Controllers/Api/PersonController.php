<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonController extends Controller
{
    private $person;

    public function __construct(Person $person)
    {
        $this->person = $person;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return $this->person->paginate(10);
        //$people = DB::table('people')->get();
        //foreach ($people as $person){
        //   echo '<pre>';
        //    echo $person->name;
       // }
       $person = DB::table('people')->where('id', 2)->get();
       return $person;


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->person->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  Person  $person
     * @return \Illuminate\Http\Response
     */
    public function show(Person $person)
    {
        //$person->load('address');
        return $person;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Person  $person
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Person $person)
    {
        $person->update($request->all());

        return $person;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Person  $person
     * @return \Illuminate\Http\Response
     */
    public function destroy(Person $person)
    {
        return $person->delete();
    }
}
