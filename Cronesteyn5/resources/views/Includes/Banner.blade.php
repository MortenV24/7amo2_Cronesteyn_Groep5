
<div class=" banner">
    <h1 id="BannerTekst">@yield('BannerTekst')</h1>
    <?php
//    $getFoto = DB::select('SELECT foto FROM contents WHERE title = "banner foto 1" ');
//    echo $getFoto;


    ?>
@foreach ($Bannerfoto as $Bannerfoto)
    <img src="{{ URL::to('/img/' . $Bannerfoto->foto) }}" alt="{{ $Bannerfoto->title }}" id="BannerFoto" />
    @endforeach

</div>