@extends('Layouts/mainLayout')

@section('title', 'Activiteiten')

@section('content')
    <h1>Activiteiten</h1>

    @foreach ($contents as $content)
            <h1>{{$content->title}}</h1>
            <p>{{$content->text}}</p>
    @endforeach

@endsection