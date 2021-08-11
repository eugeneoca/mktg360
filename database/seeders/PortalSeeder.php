<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Portal;

class PortalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Portal::create([
            'name' => 'Social Media Marketing Onboarding'
        ]);

        Portal::create([
            'name' => 'Social Media Marketing'
        ]);

        Portal::create([
            'name' => 'Paid Social Ads'
        ]);

        Portal::create([
            'name' => 'Paid Google Ads'
        ]);

        Portal::create([
            'name' => 'Reports'
        ]);

        Portal::create([
            'name' => 'Website Design Onboarding'
        ]);

        Portal::create([
            'name' => 'Website Design Feedback Phase'
        ]);

        Portal::create([
            'name' => 'Website Design Functionality Phase'
        ]);

        Portal::create([
            'name' => 'Website Design- Let\'s Launch!'
        ]);

        Portal::create([
            'name' => 'Website Hosting & Maintenance'
        ]);

        Portal::create([
            'name' => 'SEO Onboarding'
        ]);

        Portal::create([
            'name' => 'SEO Portal'
        ]);

        Portal::create([
            'name' => 'Local SEO'
        ]);

        Portal::create([
            'name' => 'Simplified Social Onboarding'
        ]);

        Portal::create([
            'name' => 'Social Graphics for INDUSTRY'
        ]);

        Portal::create([
            'name' => 'Download Customized Graphics'
        ]);

        Portal::create([
            'name' => 'Scheduling'
        ]);

        Portal::create([
            'name' => 'Curated Article Posts (INDUSTRY SPECIFIC)'
        ]);

        Portal::create([
            'name' => 'Organic Growth Checklists'
        ]);

        Portal::create([
            'name' => 'Content Planning Form'
        ]);

        Portal::create([
            'name' => 'Social EDU'
        ]);
    }
}
