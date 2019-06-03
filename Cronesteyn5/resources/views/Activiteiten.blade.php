@extends('Layouts/mainLayout')

@section('title', 'Activiteiten')
@section('BannerTekst', 'Activiteiten')

@section('content')

    @include('Includes/Banner')

    @foreach ($contents as $content)
        <div class="container">
            <div class="col-md-6 row">
                <h1>{{$content->title}}</h1>
                <p>{{$content->text}}</p>
                <img src="{{ URL::to('/img/' . $content->foto) }}" alt="{{ $content->title }}" id="haasJong"/>
            </div>

            <div class="col-md-6 row">
                @include('Includes/newsItems')
            </div>
        </div>
    @endforeach

@endsection