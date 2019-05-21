

@foreach ($fotos as $foto)
    <img src="{{ URL::to('/img/' . $foto->foto) }}" alt="{{ $foto->title }}" />
@endforeach
