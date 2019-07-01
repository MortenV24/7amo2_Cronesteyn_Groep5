@extends('Layouts/mainLayout')
@section('title', 'Parkvereniging')
@section('BannerTekst', 'Contents')

@section('content')
    <ul>
    @foreach ($contents as $content)
        <a href="/Content/{{$content->id}}">
            <li >{{$content->title}}</li>
        </a>
    @endforeach
    </ul>
@endsection
