<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        User::create([
            'name' => 'Bas Leeuwerik',
            'email' => 'bas@mail.nl',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'created_by' => null,
            'updated_by' => null,
            'role'       => 1,
        ]);


        User::create([
            'name' => 'Joppe Langejan',
            'email' => 'joppe@mail.nl',
            'email_verified_at' => now(),
            'password' =>  bcrypt('password'),
            'remember_token' => Str::random(10),
            'created_by' => null,
            'updated_by' => null,
            'role'       => 1,

        ]);
        User::factory(6)->create();
    }
}
