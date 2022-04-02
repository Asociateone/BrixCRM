<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Models\Subscription;
use App\Http\Requests\SubscriptionRequest;

class SubscriptionController extends Controller
{
    public function show()
    {

    }

    public function store(SubscriptionRequest $request,Person $person)
    {
        dd($person->subscriptions()->create($request->validated()));
    }

}
