<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Http\Requests\SubscriptionRequest;
use App\Http\Requests\SubscriptionUpdateRequest;
use App\Models\Subscription;

class SubscriptionController extends Controller
{
    public function update(SubscriptionUpdateRequest $request, Person $person)
    {
        $person->subscriptions->where('id',$request->subscription_id)->first()->update($request->validated());
        return redirect()->back();
    }

    public function store(SubscriptionRequest $request,Person $person)
    {
        $person->subscriptions()->create($request->validated());

        return redirect()->back();
    }

}
