<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            "title" => fake()->text(14) ,
            "speaker" => fake()-> name() ,
            "price" => fake()->randomNumber(4 , true) ,
            "description" => fake()->sentence(24)
        ];
    }
}
