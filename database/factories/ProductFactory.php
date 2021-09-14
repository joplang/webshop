<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'artist_id' => $this->faker->numberBetween(1, 5),
            'label_id'  => 1,
            'genre_id'  => 1,
            'album_title'         => $this->faker->name(),
            'year'          => $this->faker->year(),
            'description'   => "dit is een beschrijving van het album",
            'track_list'    => "1. nummer een
                                2. nummer twee
                                3. nummer drie
                                4. nummer vier",
            'price'         => 50.50,
            'VAT'           => 50.50,
        ];
    }
}
