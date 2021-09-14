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
            'artist_id' => 1,
            'label_id'  => 1,
            'genre_id'  => 1,
            'album_title'         => $this->faker->name(),
            'year'          => $this->faker->year(),
            'description'   => $this->faker->text(),
            'track_list'    => $this->faker->text(),
            'price'         => 50.50,
            'VAT'           => 50.50,
        ];
    }
}
