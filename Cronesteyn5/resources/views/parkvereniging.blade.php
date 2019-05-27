
@extends('Layouts/mainLayout')

@section('title', 'Parkvereniging')
@section('BannerTekst', 'Parkvereniging')
@section('content')
     @include('Includes/Banner')
<div class="col-md-12 row">
    @include('Includes/parkverenigingContent')
     @include('Includes/newsItems')
</div>
@endsection

