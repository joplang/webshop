<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Artist;
use Illuminate\Support\Facades\DB;

class ArtistsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artists')->insert([
            [
                'name'      => 'The Doobie Brothers',
                'label_id'  =>  2,
            ],
            [
                'name'      => 'Amenra',
                'label_id'  =>  1,
            ],
            [
                'name'      => 'Turia',
                'label_id'  =>  1,
            ],
            [
                'name'      => 'Fluisteraars',
                'label_id'  =>  1,
            ],
            [
                'name'      => 'Madvillain',
                'label_id'  =>  4,
            ],
            [
                'name'      => 'Funkadelic',
                'label_id'  =>  2,
            ],
            [
                'name'      => 'Aphex Twin',
                'label_id'  =>  3,
            ],
            [
                'name'      => 'Dexys Midnight Runner',
                'label_id'  =>  3,
            ],
            [
                'name'      => 'William Basinki',
                'label_id'  =>  4,
            ],
        ]);

        Artist::factory(5)->create();
    }
}
