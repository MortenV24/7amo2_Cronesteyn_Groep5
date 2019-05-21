@foreach ($contents as $content)
   <div class="container contentvak">
    <h1>{{$content->title}}</h1>
    <p>{{$content->text}}</p>
   </div>
@endforeach

