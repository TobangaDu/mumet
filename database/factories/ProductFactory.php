<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'product' => $this->faker->company(),
            'category_id' => mt_rand(1,2),
            'barcode' => $this->faker->ean8(),
            'price' => $this->faker->numberBetween($min = 5, $max = 20) * 500,
            // 'body' => '<p>' . implode('</p><p>', $this->faker->paragraphs(mt_rand(5,10))). '</p>',
            // 'user_id' => mt_rand(1,3),
            // 'category_id' => mt_rand(1,3)
        ];
    }
}
