<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genre::create([
            'name' => 'Power Metal',
            'description' => 'het beste genre',
        ]);
        Genre::create([
            'name' => 'Folk Punk',
            'description' => 'het rammeligste genre',
        ]);
        Genre::create([
            'name' => 'Eurodisco',
            'description' => 'het glitterigste genre',
        ]);
        Genre::create([
            'name' => 'Ska',
            'description' => 'het stuiterigst genre',
        ]);
        // Genre::factory(5)->create();
    }
}
