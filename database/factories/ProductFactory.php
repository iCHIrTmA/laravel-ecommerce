<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $title = $this->faker->company();

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'description' => $this->faker->catchphrase(),
            'price' => $this->faker->numberBetweet(29000, 49000),
            'live_at' => Carbon::now()->toDateTimeString(),
        ];
    }
}
