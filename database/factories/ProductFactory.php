<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word() ,
            'description' => $this->faker->sentence(),
            'category_id' => $this->faker->numberBetween(1,3),
            'purchase_price'=> $this->faker->numberBetween(1000, 10000),
            'selling_price' => $this->faker->numberBetween(11000, 20000)

        ];
    }
}
