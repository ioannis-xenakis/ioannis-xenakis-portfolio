<?php

namespace Database\Seeders;

use App\Models\TechStack;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechStackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TechStack::factory()->create([
            'name' => 'Android Studio',
            'icon_url' => 'storage/images/android_studio_icon.svg',
        ]);

        TechStack::factory()->create([
            'name' => 'Java',
            'icon_url' => 'storage/images/java_icon.svg',
        ]);

        TechStack::factory()->create([
            'name' => 'XML',
            'icon_url' => 'storage/images/xml_icon.svg',
        ]);

        TechStack::factory()->create([
            'name' => 'Kotlin',
            'icon_url' => 'storage/images/kotlin_icon.svg',
        ]);

        TechStack::factory()->create([
            'name' => 'Jetpack Compose',
            'icon_url' => 'storage/images/jetpack_compose_icon.svg',
        ]);

        TechStack::factory()->create([
            'name' => 'Retrofit',
            'icon_url' => '',
        ]);

        TechStack::factory()->create([
            'name' => 'Dagger-Hilt',
            'icon_url' => '',
        ]);

        TechStack::factory()->create([
            'name' => 'Mockito',
            'icon_url' => '',
        ]);

        TechStack::factory()->create([
            'name' => 'Espresso',
            'icon_url' => '',
        ]);

        TechStack::factory()->create([
            'name' => 'Unit Testing',
            'icon_url' => '',
        ]);

        TechStack::factory()->create([
            'name' => 'UI Testing',
            'icon_url' => '',
        ]);

        TechStack::factory()->create([
            'name' => 'Dependency Injection',
            'icon_url' => '',
        ]);

        TechStack::factory()->create([
            'name' => 'MVVM architecture',
            'icon_url' => '',
        ]);

        TechStack::factory()->create([
            'name' => 'Mockk',
            'icon_url' => '',
        ]);

        TechStack::factory()->create([
            'name' => 'Room Database',
            'icon_url' => '',
        ]);

        TechStack::factory()->create([
            'name' => 'Git',
            'icon_url' => 'storage/images/git_icon.svg',
        ]);

        TechStack::factory()->create([
            'name' => 'Python',
            'icon_url' => 'storage/images/python_icon.svg',
        ]);
    }
}
