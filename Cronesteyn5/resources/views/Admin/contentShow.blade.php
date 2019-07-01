@extends('Layouts/mainLayout')
@section('title', 'Parkvereniging')
@section('BannerTekst', 'Contents')

@section('content')
 <h1 class="title"> {{$content->title}}</h1>
 <div class="content"> {{$content->text}}</div>
 <p>
  <a  href="/Content/{{$content->id}}/edit">
   edit
  </a ><br>
  <a  href="/admin/Content">
   back
  </a >
 </p>
@endsection
