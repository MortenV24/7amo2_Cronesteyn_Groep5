<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

        public function run()
    {
        DB::table('contents')->insert([
            'title' => 'banner foto 1',
            'foto' => 'forest-grass-green.jpg',
            'text'=> false,
            'type' => 'foto'
        ]);

        DB::table('contents')->insert([
            'title' => 'vereniging vrienden polderpark cronesteyn',
            'foto'=> 'Evert Cornet.jpg',
            'text' => 'Polderpark Cronesteyn is met 86 ha het grootste park in Leiden. Het bestaat nog relatief kort.In 1981 is het ontworpen door landschapsarchitect Evert Cornet (zie foto) van de gemeente Leiden. Sindsdien is het in 35 jaar een volwassen park geworden. 

                        Het park kent veel verschillende typen leefgebied, natuurlijk veel polder met weilanden en sloten, maar ook jonge bospercelen en struiken, een reigerkolonie die zetelt op de elzen van voormalige kwekerijen, grienden, een moerastuin en bos met resten van een oud landgoed.
                        Door al die verschillende biotopen kent het de grootste soortenrijkdom van alle Leidse parken. 
                        
                        In elk seizoen is er iets wat speciale aandacht trekt: weidevogels in de weilanden en reigers in het vroege voorjaar, daslook in het landgoedbos in mei, een stralende moerastuin gedurende de hele zomer met o.a. rietorchis, grote ratelaar, knoopkruid en veel vlinders en libellen. 
                        De herfst komt met de kleur van vruchten en zaden aan struiken en bomen en paddestoelen in het bos en in de moerastuin.
                         En ’s winters overwinteren smientjes in de sloten en wordt ’t park een wit sprookje na sneeuwval, met snel en veilig ijs op de waterspeelplaats bij de spoorbaan. Kortom: een park om van te houden en van te genieten. 
                        
                        Het park kent een parkvereniging: Vereniging Vrienden van Polderpark Cronesteyn (VVPC).De VVPC probeert met de uitgave van jaarboekjes (tot nu toe 6 verschenen), het houden van lezingen en subsidiëring van activiteiten (zoals in 2006 het kunstproject De Salixslinger) haar steentje bij te dragen aan instandhouding en verbetering van het park. De website www.polderparkcronesteyn.nl wordt door haar in stand gehouden. 
                        Ook neemt zij deel aan het zogenaamde ‘klankbordoverleg’ met de gemeente Leiden over beheer en ontwikkeling van het park. En heeft ze - gedurende de jaren dat het project ter verdubbeling van de snelweg A4 gaande was – deelgenomen met andere belanggroepen aan de ‘omgevingsgroep’, die als inspraakorgaan functioneerde bij overleg met Rijkswaterstaat en de aannemer BAM. 
                        Momenteel houdt ze de vinger aan de pols bij de ontwikkeling van een nieuw 10-jarig beleidsplan van de Gemeente Leiden voor het park, èn bij het project van ondertunneling van de spoorlijn bij de Kanaalweg, dat nodig is voor een frequentere spoorverbinding tussen Leiden en Utrecht.
                        Als belangenbehartiger van het park blijft een sterke vereniging nodig. Voor de leden wordt – naast de website - nieuwsbrieven verstuurd en is er jaarlijks een vergadering. 
                        Wilt u de vereniging helpen door lid te worden, klik dan hier.',
            'type' => 'Parkvereniging'
        ]);

        DB::table('contents')->insert([
            'title' => 'Programma van 2019',
            'foto'=> 'haas jong.jpg',
            'text' => 'Alle activiteiten starten bij De tuin van de smid, tenzij anders aangegeven.',
            'type' => 'Activiteiten'
        ]);
        DB::table('contents')->insert([
            'title' => 'Mei:',
            'foto'=> '',
            'text' => 'Lorem Ipsum',
            'type' => 'Vogelwerkgroep'
        ]);
        DB::table('contents')->insert([
            'title' => 'backgroundsquirrel',
            'foto'=> 'background_squirrel.jpeg',
            'text' => '',
            'type' => 'Home'
        ]);
    }

}
