<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Settings>
 */
class SettingsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_english_name' => fake()->text(),
            'first_greek_name' => fake()->text(),
            'last_name' => fake()->text(),
            'job_title' => fake()->text(),
            'location' => fake()->text(),
            'phone' => fake()->text(),
            'email' => fake()->text(),
            'languages' => fake()->text(),
            'birth_date' => fake()->date(),
            'github_url' => fake()->text(),
            'stack_overflow_url' => fake()->text(),
            'linkedin_url' => fake()->text(),
            'google_play_url' => fake()->text(),
        ];
    }
}
