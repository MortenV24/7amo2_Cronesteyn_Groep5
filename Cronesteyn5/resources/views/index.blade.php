@extends('Layouts/mainLayout')

@section('title', 'Home')

@section('content')
    <h1>Home</h1>

    @foreach ($backgroundimage as $backgroundimages)
        <img src="{{ URL::to('/img/'.$backgroundimages->foto) }}" alt="{{ $backgroundimages->title }}" />
    @endforeach

@endsection



