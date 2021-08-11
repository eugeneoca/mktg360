<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TicketType;

class TicketTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TicketType::create([
            'name' => 'General Question'
        ]);

        TicketType::create([
            'name' => 'Feature Request'
        ]);

        TicketType::create([
            'name' => 'Bug Report'
        ]);

        TicketType::create([
            'name' => 'My Account'
        ]);

        TicketType::create([
            'name' => 'Other'
        ]);
    }
}
