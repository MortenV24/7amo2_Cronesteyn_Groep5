@extends('Layouts/mainLayout')

@section('title', 'Activiteiten')

@section('content')
    <h1>Activiteiten</h1>

    @foreach ($contents as $content)
        <div id="activiteit">
            <h1>{{$content->title}}</h1>
            <p>{{$content->text}}</p>
            <img src="{{ URL::to('/img/' . $content->foto) }}" alt="{{ $content->title }}" id="haasJong"/>
        </div>
    @endforeach

@endsection