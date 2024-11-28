<?php

namespace Database\Seeders;

use App\Models\Photos;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhotosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Photos::factory()->create([
            'photo_name' => 'John Xenakis photo 1',
            'photo_url' => 'storage/images/john_xenakis_photo.jpg',
        ]);
    }
}
