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
            'foto'=> false,
            'text' => 'Polderpark Cronesteyn is met 86 ha het grootste park in Leiden. Het bestaat nog relatief kort.In 1981 is het ontworpen door landschapsarchitect Evert Cornet (zie foto) van de gemeente Leiden. Sindsdien is het in 35 jaar een volwassen park geworden. Het park kent veel verschillende typen leefgebied, natuurlijk veel polder met weilanden en sloten, maar ook jonge bospercelen en struiken, een reigerkolonie die zetelt op de elzen van voormalige kwekerijen, grienden, een moerastuin en bos met resten van een oud landgoed. Door al die verschillende biotopen kent het de grootste soortenrijkdom van alle Leidse parken.',
            'type' => 'Parkvereniging'
        ]);
    }

}
