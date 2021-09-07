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
            'description' => 'Een metallabel',
        ]);
        Label::factory(3)->create();
    }
}
