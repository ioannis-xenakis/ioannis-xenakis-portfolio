<?php

namespace Database\Seeders;

use App\Models\ContactItems;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContactItems::factory()->create([
            'name' => '+306981528515',
            'icon_location_url' => 'storage/images/phone_icon.svg',
            'link_url' => 'tel:306981528515',
        ]);

        ContactItems::factory()->create([
            'name' => 'Xenakis.i.contact@gmail.com',
            'icon_location_url' => 'storage/images/email_icon.svg',
            'link_url' => 'mailto:Xenakis.i.contact@gmail.com',
        ]);

        ContactItems::factory()->create([
            'name' => 'Linkedin',
            'icon_location_url' => 'storage/images/linkedin_icon.svg',
            'link_url' => 'https://www.linkedin.com/in/john-xenakis-81647217a/',
        ]);

        ContactItems::factory()->create([
            'name' => 'GitHub',
            'icon_location_url' => 'storage/images/github_icon.svg',
            'link_url' => 'https://github.com/ioannis-xenakis',
        ]);

        ContactItems::factory()->create([
            'name' => 'Google Play',
            'icon_location_url' => 'storage/images/google_play_icon.svg',
            'link_url' => 'https://play.google.com/store/apps/developer?id=Ioannis+Xenakis',
        ]);

        ContactItems::factory()->create([
            'name' => 'Stack Overflow',
            'icon_location_url' => 'storage/images/stack_overflow_icon.svg',
            'link_url' => 'https://stackoverflow.com/users/7187975/john-xenakis',
        ]);

        ContactItems::factory()->create([
            'name' => 'Upwork',
            'icon_location_url' => 'storage/images/upwork_icon.svg',
            'link_url' => 'https://www.upwork.com/freelancers/~016871afedf0ad4b7c',
        ]);
    }
}
