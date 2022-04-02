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
                    <form action={{route('subsciptions.store',['person' => $person->id])}} method="POST">
                        <td><input type="text" name="phone_number" id="phone_number" value="+316"></td>
                        @csrf
                        <td><input type="submit" value="Invullen"></td>
                    </form>
                </tr>

                {{$person->subscriptions}}
            </tbody>
        </table>
    </div>
@endsection
