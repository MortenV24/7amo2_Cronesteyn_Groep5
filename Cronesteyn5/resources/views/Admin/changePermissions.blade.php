@extends('Layouts/mainLayout')

@section('title', 'Gebruikers beheren')
@section('content')

    @foreach ($users as $user)
        <div class="col-md-6">
            <div class="container contentvak">
                <p>{{$user->name}} <br> {{$user->email}}</p>
            </div>
        </div>
    @endforeach

@endsection