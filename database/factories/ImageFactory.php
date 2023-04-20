<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_user' => $this->faker->randomDigitNotNull(),
            'title' => $this->faker->company(),
            'description' => $this->faker->realText(),
            'img' => $this->faker->imageUrl(),
            'year' => $this->faker->year(),
        ];
    }
}
