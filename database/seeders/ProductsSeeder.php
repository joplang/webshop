<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
            [
                'artist_id'     => 1,
                'label_id'      => 2,
                'genre_id'      => 2,
                'album_title'   => 'The Captain and Me',
                'year'          =>  1973,
                'description'   => "The Captain and Me is the third studio album by American rock band The Doobie Brothers. The album was released on March 2, 1973, by Warner Bros. Records.",
                'track_list'    => "1: Natural Thing (3:19)
        2: Long Train Runnin' (3:28)
        3: China Grove (3:17)
        4: Dark Eyed Cajun Woman (4:14)
        5: Clear as the Driven Snow (5:19)
        6: Without You (5:02)
        7: South City Midnight Lady (5:29)
        8: Evil Woman (3:20)
        9: Busted Down Around O'Connelly Corners (0:49)
        10: Ukiah (3:02)
        11: The Captain and Me (4:47)
        ",
                'price'         => 20.98,
                'VAT'           => 5.50,
            ]
        );
        Product::factory(42)->create();
    }
}
