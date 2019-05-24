
@extends('Layouts/mainLayout')

@section('title', 'Parkvereniging')
@section('BannerTekst', 'Parkvereniging')
@section('content')
     @include('Includes/Banner')

    @include('Includes/parkverenigingContent')

@endsection

