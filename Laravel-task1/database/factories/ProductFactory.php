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
            "product_name" => $this->faker->text(15),
            "product_price" => $this->faker->numberBetween($min = 1500, $max = 6000),
            "stock" => $this->faker->numberBetween($min = 0, $max = 30)
        ];
    }
}
