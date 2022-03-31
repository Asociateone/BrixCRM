@extends('welcome')

@section('content')
    <div class="container">
        <form action="/persons" method="POST">
            <input type="text" name="first_name" id="first_name" placeholder="First name"><br>
            <input type="text" name="last_name" id="last_name" placeholder="Last name"><br>
            <button>Submit</button>
            @csrf
        </form>
    </div>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <td>Firstname</td>
                    <td>Last name</td>
                    <td>Blocked</td>
                    <td>change</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($persons as $person)
                <tr>
                    <form action="/persons/{{$person->id}}" method="post">
                        @method('PUT')
                        <td><input type="text" name="first_name" id="first_name" value="{{$person->first_name}}"></td>
                        <td><input type="text" name="last_name" id="last_name" value="{{$person->last_name}}"></td>
                        <td><input type="checkbox" name="actions_blocked" id="actions_blocked" @checked($person->actions_blocked)></td>
                        @csrf
                        <td><button type="submit">Change</button></td>
                    </form>
                </tr>
                @endforeach
            </tbody>
    </table>
    </div>
@endsection
