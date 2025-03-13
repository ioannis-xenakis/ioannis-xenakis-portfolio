<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProjectsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'project_name' => fake()->text(),
            'project_description' => fake()->text(),
            'project_image_url' => fake()->text(),
            'keywords' => [""],
            'github_icon_url' => fake()->text(),
            'google_play_icon_url' => fake()->text(),
            'github_url' => fake()->text(),
            'google_play_url' => fake()->text(),
        ];
    }
}