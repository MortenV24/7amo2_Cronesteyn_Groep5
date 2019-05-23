
<div class=" banner">
    <h1 id="BannerTekst">@yield('BannerTekst')</h1>
    <?php
    $getFoto = DB::select('SELECT foto FROM contents WHERE title = "banner foto 1" ');
    echo $getFoto;


    ?>
@foreach ($fotos as $foto)
    <img src="{{ URL::to('/img/' . $foto->foto) }}" alt="{{ $foto->title }}" id="BannerFoto" />
@endforeach

</div>