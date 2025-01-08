<?php

namespace Database\Seeders;

use App\Models\Settings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Settings::factory()->create([
            'first_english_name' => 'John',
            'first_greek_name' => 'Ioannis',
            'last_name' => 'Xenakis',
            'job_title' => 'Android App Developer',
            'location' => 'Piraeus, Attica, Greece',
            'phone' => '30 698 152 8515',
            'email' => 'Xenakis.i.contact@gmail.com',
            'languages' => 'English, Greek',
            'birth_date' => Carbon::createFromFormat('d-m-Y', '22-11-1990'),
            'github_url' => 'https://github.com/ioannis-xenakis',
            'stack_overflow_url' => 'https://stackoverflow.com/users/7187975/john-xenakis',
            'linkedin_url' => 'https://www.linkedin.com/in/john-xenakis-81647217a/',
            'google_play_url' => 'https://play.google.com/store/apps/developer?id=Ioannis+Xenakis',
        ]);
    }
}
