
@extends('Layouts/mainLayout')

@section('title', 'Vogelwerkgroep')
@section('BannerTekst', 'Vogelwerkgroep')
@section('content')
    @include('Includes/Banner')

    <div class="col-md-10">
        <div class="row">
            @foreach ($contents as $content)
                <div class="col-md-6">
                    <div class="container contentvak">
                        <h1>{{$content->title}}</h1>
                        <p>{{$content->text}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection