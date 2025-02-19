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
            'about_me_description' => 'I’m Ioannis Xenakis. Just call me John. I’m from Greece. I’m a self-taught Android App Developer but I’m open to anything(by the way, I’ve built this site, using Laravel).',
            'job_title' => 'Android App Developer',
            'location' => 'Piraeus, Attica, Greece',
            'phone' => '+306981528515',
            'email' => 'Xenakis.i.contact@gmail.com',
            'languages' => 'English, Greek',
            'birth_date' => Carbon::createFromFormat('d-m-Y', '22-11-1990'),
        ]);
    }
}
