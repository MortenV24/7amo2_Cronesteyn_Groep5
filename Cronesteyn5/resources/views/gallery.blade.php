
@extends('Layouts/mainLayout')

@section('title', 'Gallery')
@section('BannerTekst', 'Gallery')
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


    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php
            $i = 0;
            foreach($slides as $slide){
            if($i == 0){
            ?>
            <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i; ?>" class="active"></li>
            <?php
            $i++;  }else{
            if($i != 0){
            ?>
            <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i; ?>" ></li>
            <?php
            } $i++;
            }
            }
            ?>
        </ol>
        <div class="carousel-inner">
            <?php
            $i = 0;
            foreach($slides as $slide){
            if($i == 0){
            ?>

            <div class="carousel-item active col-sm-6" style="margin: 0 auto; margin-top: 50px; float: none;">
                <img src="img/{{$slide->foto}}" width="1000px" height="750px" alt="{{$slide->title}}">
            </div>
            <?php
            $i++;   } else{
            if($i != 0){
            ?>
                <div class="carousel-item col-sm-6" style="margin: 0 auto; margin-top: 50px; float: none;">
                <img src="img/{{$slide->foto}}" width="1000px" height="750px" alt="{{$slide->title}}">
            </div>
            <?php
            } $i++;
            }
            }
            ?>
        </div>
        <a class="carousel-control-prev"  href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


@endsection