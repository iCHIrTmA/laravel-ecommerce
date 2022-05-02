<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Variation>
 */
class VariationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'product_id' => $this->faker->numberBetween(1, 5),
            'title' => Arr::random([7, 8, 9, 10, 'White', 'Black, Maroon', 'Purple']),
            'price' => $this->faker->numberBetween(29000, 49000),
            'type' => Arr::random(['type', 'size']),
            'sku' => Arr::random([null, Str::random(3)]),
            'parent_id' => Arr::random([null, 1, 2, 7, 8, 9, 10]),
            'order' => $this->faker->numberBetween(1, 3),
        ];
    }
}
