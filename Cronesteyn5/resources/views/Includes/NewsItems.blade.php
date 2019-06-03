<div class="col-md-12">
    <h1>Newsitems</h1>
</div>
@foreach ($newsitems as $newsitem)
    <div class="col-md-12 newsitem" >
        <h1>{{$newsitem->title}}</h1>
        <p>{{$newsitem->text}}</p>
    </div>
@endforeach