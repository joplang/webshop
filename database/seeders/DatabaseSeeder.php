<?php

namespace Database\Seeders;

use App\Models\Label;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(GenreSeeder::class);
        $this->call(LabelSeeder::class);
        $this->call(ArtistsSeeder::class);
        $this->call(CustomersSeeder::class);
        $this->call(ProductsSeeder::class);
    }    
}