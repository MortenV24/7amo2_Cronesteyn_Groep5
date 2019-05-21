

@foreach ($fotos as $foto)
    <img src="{{ URL::to('/img/' . $foto->foto(0)) }}" alt="{{ $foto->title }}" />
@endforeach
