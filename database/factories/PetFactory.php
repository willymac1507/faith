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
            'sex' => fake()->randomElement(['male', 'female']),
            'age_years' => rand(0, 15),
            'age_months' => rand(0, 11),
            'status' => fake()->randomElement(['available', 'reserved', 'adopted']),
            'date_registered' => fake()->dateTimeBetween('-6 years', 'now'),
            'date_reserved' => null,
            'date_adopted' => null,
            'prefs_children' => fake()->randomElement([1, 0]),
            'prefs_teens' => fake()->randomElement([1, 0]),
            'prefs_dogs' => fake()->randomElement([1, 0]),
            'prefs_cats' => fake()->randomElement([1, 0]),
        ];
    }
}
