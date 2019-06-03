
@extends('Layouts/mainLayout')
@section('title', 'Parkvereniging')
@section('BannerTekst', 'parkvereniging')

@section('content')

    <div class=" banner">
        @include('Includes/Banner')
    </div>

<div class="col-md-12 row">
    <div class="col-md-12">

    </div>
    <div class="col-md-10">
        <div class="row">
            @foreach ($contents as $content)
                <div class="col-md-12">
                    <div class="container contentvak">
                        <h1>{{$content->title}}</h1>
                        <img src="{{ URL::to('/img/' . $content->foto) }}" alt="{{ $content->foto }}" id="{{ $content->foto }}  " class="ContentFoto"/>
                        <p>{{$content->text}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="col-md-2 newsitem">
        @include('Includes/NewsItems')
    </div>

</div>

@endsection

