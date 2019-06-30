
<div class=" banner">
    <h1 id="BannerTekst">@yield('BannerTekst')</h1>
    <?php

    ?>

    @foreach ($Bannerfoto as $Bannerfoto)
        <img src="{{ URL::to('/img/' . $Bannerfoto->foto) }}" alt="{{ $Bannerfoto->title }}" id="BannerFoto"/>
    @endforeach

</div>