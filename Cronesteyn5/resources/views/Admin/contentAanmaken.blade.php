@extends('Layouts/mainLayout')

@section('title', 'Content maken')
@section('content')
<div class="container col-md-8">
    <div class="row">
        @include('Includes/ContentAanmaakForm')
    </div>
</div>
@endsection