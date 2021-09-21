<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Label;

class LabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Label::create([
            'name' => 'Nuclear Blast',
            'description' => 'Nuclear Blast is een Duitse platenmaatschappij en postorderplatendistributeur gespecialiseerd in heavy metal en subgenres daarvan. In 1987 werd het label door Markus Staiger opgericht als hardcore-punkplatenmaatschappij. Het hoofdkantoor staat in het Duitse Donzdorf, Göppingen. In Amerika en Brazilië heeft Nuclear Blast dependances.',
        ]);
        Label::create([
            'name' => 'Atlantic Records',
            'description' => 'Atlantic Records (Atlantic Recording Corporation) is een Amerikaans platenlabel, opgericht in 1947 door Herb Abramson en Ahmet Ertegün, dat in de 20 jaar erna uitgroeide van een klein onafhankelijk label tot een van de belangrijkste labels, gespecialiseerd in jazz, R&B en soul. In 1967 werd het een dochteronderneming van Warner Music Group.',
        ]);
        Label::create([
            'name' => 'Napalm Records',
            'description' => 'Napalm Records is een Oostenrijks platenlabel met als vestigingsplaats Eisenerz en een tweede vestiging in Austin (Texas). Het label werd in 1992 door Markus Riedler opgericht. Het label heeft voornamelijk metalbands onder contract staan.',
        ]);
        Label::create([
            'name' => 'Columbia Records',
            'description' => 'Columbia Records is een Amerikaanse platenmaatschappij, een van de oudste platenmaatschappijen in de wereld, ontstaan in 1888. De naam is afgeleid van de plaats van oprichting, het district Columbia in de Verenigde Staten, heden beter bekend als Washington D.C. Columbia is sinds 1988 een dochteronderneming van het Japanse Sony Music Entertainment.',
        ]);
        //  Label::factory(3)->create();
    }
}
