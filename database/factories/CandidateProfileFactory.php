<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CandidateProfile>
 */
class CandidateProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'uuid' => fake()->uuid(),
            'name' => fake()->name(),
            'user_id' => User::factory(),
            'email' => fake()->unique()->safeEmail(),
            'dob' => fake()->date(),
            'phone_number' => fake()->phoneNumber(),
            'about' => fake()->paragraph(),
            'key_skills' => fake()->randomElements(config('app.keywords'), 3),
            'work_exp_range_from' => fake()->year(),
            'work_exp_range_to' => fake()->year(),
            'salary_currency' => 'USD',
            'salary_range_from' => fake()->biasedNumberBetween(100, 500),
            'salary_range_to' => fake()->biasedNumberBetween(300, 1000),
            'location' => fake()->city(),
            'is_willing_to_relocate' => fake()->boolean(),
            'industry' => fake()->randomElement(config('app.industries')),
            'functional_area' => fake()->randomElement(config('app.area')),
            'address' => fake()->address(),
            'resume' => fake()->paragraph(),
            'is_enabled' => true,
        ];
    }
}
