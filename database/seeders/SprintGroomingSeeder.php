<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SprintGrooming;

class SprintGroomingSeeder extends Seeder
{
    public function run()
    {
        SprintGrooming::create([
            'title' => 'First Grooming',
            'description' => 'This is the first sprint grooming session.',
            'meeting_date' => '2024-07-01',
        ]);

        SprintGrooming::create([
            'title' => 'Second Grooming',
            'description' => 'This is the second sprint grooming session.',
            'meeting_date' => '2024-07-08',
        ]);
    }
}
