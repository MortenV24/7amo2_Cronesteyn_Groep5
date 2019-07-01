@extends('Layouts/mainLayout')
@section('title', 'Parkvereniging')
@section('BannerTekst', 'Contents')

@section('content')
 <style>
  .card{
   text-align: center !important;
   margin: 1vw 1vw;
  }
 </style>

 <div class="card col-md-3">
  <div class="card-body">
 <h1 class="title"> {{$content->title}}</h1>
 <div class="content"> {{$content->text}}</div>
  </div>
 </div>
 <p>
  <a  href="/Content/{{$content->id}}/edit">
   edit
  </a ><br>
  <a  href="/admin/Content">
   back
  </a >
 </p>
@endsection
