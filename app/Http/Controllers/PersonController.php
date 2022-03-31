<?php

namespace App\Http\Controllers;
use App\Models\Person;
use App\Http\Requests\PersonCreateRequest;

class PersonController extends Controller
{
    public function index (Person $persons)
    {
        $persons = $persons->get();
        return view('Persons.index',compact('persons'));
    }

    public function show()
    {

    }

    public function store(PersonCreateRequest $request, Person $person)
    {
        $person->create($request->validated());
        return redirect()->back();
    }
}
