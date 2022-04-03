<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Http\Requests\SubscriptionRequest;

class SubscriptionController extends Controller
{

    public function index()
    {

    }
    public function store(SubscriptionRequest $request,Person $person)
    {
        $person->subscriptions()->create($request->validated());

        return redirect()->back();
    }

}
