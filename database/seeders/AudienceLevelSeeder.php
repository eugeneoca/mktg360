<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AudienceLevel;

class AudienceLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AudienceLevel::create([
            'description' => 'I want to be heavily involve. I will be submitting ideas and i want the team to implement exactly as i send.'
        ]);

        AudienceLevel::create([
            'description' => 'I want to be heavily involved, but as i begin to trust will be backing off so i have more time in other areas of my business.'
        ]);

        AudienceLevel::create([
            'description' => 'I want to be involve and will be looking to the team for thier experience to guide the marketing strategies and content development.'
        ]);

        AudienceLevel::create([
            'description' => 'I want to completely rely on the team to develop and implement the strategy and content.'
        ]);
    }
}
