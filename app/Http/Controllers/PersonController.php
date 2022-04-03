<?php

namespace App\Http\Controllers;
use App\Models\Person;
use App\Http\Requests\PersonCreateRequest;
use App\Http\Requests\PersonUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PersonController extends Controller
{
    public function index (Person $persons): View
    {
        $persons = $persons->get();

        return view('Persons.index',compact('persons'));
    }

    public function show(Person $person): View
    {
        return view('Persons.show', compact('person'));
    }

    public function update(PersonUpdateRequest $request, Person $person): RedirectResponse
    {
        $person->update($request->validated());

        return redirect()->back();
    }

    public function store(PersonCreateRequest $request, Person $person): RedirectResponse
    {
        $person->create($request->validated());

        return redirect()->back();
    }
}
