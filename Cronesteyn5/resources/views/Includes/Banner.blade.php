
<div class=" banner">
    <h1 id="BannerTekst">@yield('BannerTekst')</h1>
@foreach ($fotos as $foto)
    <img src="{{ URL::to('/img/' . $foto->foto) }}" alt="{{ $foto->title }}" id="BannerFoto" />

@endforeach

</div>