<?php

namespace App\Http\Controllers;
use App\Models\Person;
use App\Http\Requests\PersonCreateRequest;
use App\Http\Requests\PersonUpdateRequest;

class PersonController extends Controller
{
    public function index (Person $persons)
    {
        $persons = $persons->get();
        return view('Persons.index',compact('persons'));
    }

    public function show(Person $person)
    {
        return view('Persons.show', compact('person'));
    }

    public function update(PersonUpdateRequest $request, Person $person)
    {
        $person->update($request->validated());
        return redirect()->back();
    }

    public function store(PersonCreateRequest $request, Person $person)
    {
        $person->create($request->validated());
        return redirect()->back();
    }
}
