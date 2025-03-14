<?php

namespace Database\Seeders;

use App\Models\Projects;
use Illuminate\Database\Seeder;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Projects::factory()->create([
            "project_name" => "My Notie",
            "project_description" => "“My Notie” is an android notes app made for being simple and pleasant to work with your notes.",
            "project_image_url" => "storage/images/my_notie.png",
            "keywords" => json_encode(["Kotlin", "XML", "Room DB", "Native Android App"]),
            "github_icon_url" => "storage/images/github_icon_2.svg",
            "google_play_icon_url" => "storage/images/google_play_icon_2.svg",
            "github_url" => "https://github.com/ioannis-xenakis/my-notie",
            "google_play_url" => "https://play.google.com/store/apps/details?id=com.xenakis.my_notie"
        ]);

        Projects::factory()->create([
            "project_name" => "Jokester",
            "project_description" => "An android app called “Jokester” that is made for people to see some nice jokes and laugh. ",
            "project_image_url" => "storage/images/jokester.png",
            "keywords" => json_encode(["Kotlin", "Jetpack Compose", "Retrofit", "Native Android App"]),
            "github_icon_url" => "storage/images/github_icon_2.svg",
            "google_play_icon_url" => "storage/images/google_play_icon_2.svg",
            "github_url" => "https://github.com/ioannis-xenakis/jokester",
            "google_play_url" => "https://play.google.com/store/apps/details?id=com.xenakis.jokester"
        ]);

        Projects::factory()->create([
            "project_name" => "Ioannis Xenakis Portfolio",
            "project_description" => "It’s the same site that you are visiting right now! It is about my portfolio site (Ioannis Xenakis portfolio).",
            "project_image_url" => "storage/images/portfolio.png",
            "keywords" => json_encode(["PHP", "Laravel", "XAMPP MySQL", "Inertia React JS", "Tailwind CSS"]),
            "github_icon_url" => "storage/images/github_icon_2.svg",
            "google_play_icon_url" => "",
            "github_url" => "https://github.com/ioannis-xenakis/ioannis-xenakis-portfolio",
            "google_play_url" => ""
        ]);
    }
}
