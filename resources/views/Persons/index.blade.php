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
        @foreach ($persons as $person)
            {{$person}}
        @endforeach
    </div>
@endsection
