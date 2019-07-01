@extends('Layouts/mainLayout')
@section('title', 'Parkvereniging')
@section('BannerTekst', 'Contact berichten')

@section('content')
    <ul>
        @foreach ($contact as $contact)
            <a href="/contact/{{$contact->id}}">
                <li >{{$contact->naam}}</li>
            </a>
        @endforeach
    </ul>
@endsection
