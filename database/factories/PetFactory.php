<?php

namespace Database\Factories;

use App\Models\Pet;
use Illuminate\Database\Eloquent\Factories\Factory;

class PetFactory extends Factory
{
    protected $model = Pet::class;

    public function definition(): array
    {
        return [
            'name' => fake()->firstName(),
            'category' => fake()->randomElement(['dog', 'cat', 'rabbit', 'other']),
            'description' => fake()->paragraph,
            'age_years' => rand(0, 15),
            'age_months' => rand(0, 11),
            'status' => fake()->randomElement(['Available', 'Reserved', 'Adopted']),
            'date_registered' => fake()->dateTimeBetween('-6 years', 'now'),
            'date_reserved' => null,
            'date_adopted' => null
        ];
    }
}
