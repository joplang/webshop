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
            'created_by' => null,
            'updated_by' => null,    
        ]);
        Genre::factory(5)->create();
    }
}
