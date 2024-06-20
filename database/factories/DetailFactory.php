<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\detail>
 */
class DetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'Title' => $this->faker->title(),
            'Sub_Title' => $this->faker->sentence(),
            'Body_Content' => $this->faker->paragraph(),

        ];
    }
}
