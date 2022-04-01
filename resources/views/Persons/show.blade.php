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

    </div>
@endsection
