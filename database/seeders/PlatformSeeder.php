<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Platform;

class PlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Platform::create([
            'name' => 'Facebook'
        ]);

        Platform::create([
            'name' => 'Instagram'
        ]);

        Platform::create([
            'name' => 'LinkedIn'
        ]);

        Platform::create([
            'name' => 'Twitter'
        ]);

        Platform::create([
            'name' => 'Pinterest'
        ]);

        Platform::create([
            'name' => 'Google Business'
        ]);
    }
}
