@extends('Layouts/mainLayout')

@section('title', 'Home')

@section('content')

<div class="image">

    @foreach ($backgroundimage as $backgroundimages)
        <img src="{{ URL::to('/img/'.$backgroundimages->foto) }}" alt="{{ $backgroundimages->title }}" />
    @endforeach
    <div id="homepageTextSmall"><h1><b>Welkom in Polderpark Cronesteyn!</b></h1></div>
    <div id="homepageText"><h1><b>Welkom in Polderpark Cronesteyn</b></h1><br>
        <p>Polderpark Cronesteyn ligt in de Kleine Cronesteynse polder, ook wel Knotterpolder genoemd.<br>
           De polder ligt tussen de A4, de spoorlijn naar Alphen aan de Rijn, het Rijn-Schiekanaal en de N 206. De grootte is ca. 90 ha.<br>
            In 1975 kwam Cronesteyn in handen van de gemeente Leiden. In 1982 werd het polderpark gerealiseerd naar het ontwerp van Evert Cornet.<br>
            Het park is geworden tot ontmoetingsplek, rustpunt, historisch monument en speciaal biotoop.<br>

           In het park zijn wandel- en fietspaden aangelegd, op de fietspaden is ook goed te skaten.<br>
            Daarnaast zijn er o.a. een moerastuin, een waterspeelplaats, een landgoedbos en een camping te vinden.<br>
            Ook is er een bos waar ieder jaar reigers broeden.<br>

           In het park is het theehuis De tuin van de smid (voorheen bezoekerscentrum 'Het Reigersbos') te vinden.<br>
            Het theehuis is iedere dag geopend.<br>

           Een aantal organisaties is op een educatieve of recreatieve manier actief in het park. Op de pagina 'contact' vindt u de links naar hun websites.</p>
    </div>


</div>
@endsection