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
        DB::table('products')->insert(
            [
                'artist_id'     => 2,
                'label_id'      => 1,
                'genre_id'      => 1,
                'album_title'   => 'De Doorn',
                'year'          =>  2021,
                'description'   => "AMENRA’s first release for Relapse Records is at once a departure and a momentous act of deliverance.",
                'track_list'    => "	
                1.
                Ogentroost 10:01
                2.
                De Dood In Bloei 04:38
                3.
                De Evenmens 08:01
                4.
                Het Gloren 11:30
                5.
                Voor Immer 12:42
        ",
                'price'         => 20.98,
                'VAT'           => 5.50,
            ]
        );
        DB::table('products')->insert(
            [
                'artist_id'     => 3,
                'label_id'      => 1,
                'genre_id'      => 1,
                'album_title'   => 'Dede Kondre',
                'year'          =>  2017,
                'description'   => "Turia was started in the winter of 2014. The band aims to evoke gripping black metal, stripped to its bare necessities. ",
                'track_list'    => "	
                1.
                Dede Kondre 06:45
                2.
                Een Poort van Takken en Loof 08:00
                buy track
                3.
                De Houten Tempel 08:04
                4.
                Waterzucht 07:35
                5.
                De Toorn der Goden 11:11
        ",
                'price'         => 20.98,
                'VAT'           => 5.50,
            ]
        );
        DB::table('products')->insert(
            [
                'artist_id'     => 4,
                'label_id'      => 1,
                'genre_id'      => 1,
                'album_title'   => 'Gegrepen Door de Geest der Zielsontluiking',
                'year'          =>  2021,
                'description'   => "Fluisteraars do it again with their idiosyncratic, emotive, conjuring heavy music. They truly bring you into their mysterious world with their atmospheres and melodies. ",
                'track_list'    => "		
                1.
                Het overvleugelen der meute 08:14
                2.
                Brand woedt in mijn graf 07:06
                3.
                Verscheuring in de schemering 20:15
                about                
        ",
                'price'         => 20.98,
                'VAT'           => 5.50,
            ]
        );
        Product::factory(42)->create();
    }
}
