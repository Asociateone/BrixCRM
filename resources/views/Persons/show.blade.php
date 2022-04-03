@extends('welcome')

@section('content')
    <div class="container">
        <table>
            <thead>
                <td>First name</td>
                <td>Last name</td>
                <td>Blocked</td>
            </thead>
            <tbody>
                <td>
                    {{$person->first_name}}
                </td>
                <td>
                    {{$person->last_name}}
                </td>
                <td>
                    @if ($person->actions_blocked)
                    Blocked
                    @else
                    Not Blocked
                    @endif
                </td>
            </tbody>
        </table>
    </div>

    <div class="container">
        <table>
            <thead>
                <td>phone number</td>
                <td>active</td>
                <td></td>
            </thead>
            <tbody>
                <tr>
                    <form action={{route('subscriptions.store', ['person' => $person->id])}} method="post">
                        <td><input type="text" name="phone_number" id="phone_number" value="+316"></td>
                        <td><input type="hidden" name="person_id" value={{$person->id}}></td>
                        @csrf
                        <td><input type="submit"></td>
                    </form>
                </tr>
            <tfoot>
                @foreach ($person->subscriptions as $subscription)
                    <tr>
                        <form action={{route('subscriptions.update', ['person' => $person->id, 'subscription' => $subscription->id])}} method="POST">
                            @method('PUT')
                            <td>
                                <input type="text" name="phone_number" id="phone_number" value="{{$subscription->phone_number}}"/></td>
                            <td>
                                <select name="active" id="active">
                                    <option value="1" @if($subscription->active) selected @endif>Active</option>
                                    <option value="0" @if(!$subscription->active) selected @endif>In-active</option>
                                </select>
                            </td>
                            <td>
                                <button type="submit">Change</button>
                            </td>
                            <input type="hidden" name="subscription_id" id="subscription_id" value="{{$subscription->id}}">
                            @csrf
                        </form>
                    </tr>
                @endforeach
            </tfoot>
            </tbody>
        </table>
    </div>
@endsection
