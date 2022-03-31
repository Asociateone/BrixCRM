<?php

namespace App\Http\Controllers;
use App\Models\Person;
use App\Http\Requests\PersonCreateRequest;

class PersonController extends Controller
{
    public function index (Person $person)
    {
        return view('Persons.index');
    }

    public function show()
    {

    }

    public function store(PersonCreateRequest $request, Person $person)
    {
        return $person->create($request->validated());
    }
}
