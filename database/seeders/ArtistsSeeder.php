<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Artist;

class ArtistsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artist::factory(20)->create();
    }
}
