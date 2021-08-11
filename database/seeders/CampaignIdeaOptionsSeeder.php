<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CampaignIdeaOptions;

class CampaignIdeaOptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CampaignIdeaOptions::create([
            'value' => 'Increase Brand Awareness'
        ]);

        CampaignIdeaOptions::create([
            'value' => 'Increase Engagement'
        ]);

        CampaignIdeaOptions::create([
            'value' => 'Sales on Social Media Store'
        ]);

        CampaignIdeaOptions::create([
            'value' => 'Sales through Chatbot'
        ]);

        CampaignIdeaOptions::create([
            'value' => 'Increase Traffic to Website'
        ]);

        CampaignIdeaOptions::create([
            'value' => 'Increase Traffic to a Physical Location'
        ]);

        CampaignIdeaOptions::create([
            'value' => 'Building up a Facebook Group'
        ]);

        CampaignIdeaOptions::create([
            'value' => 'Increasing Social Media Followers'
        ]);

        CampaignIdeaOptions::create([
            'value' => 'Increase Traffic to a Webinar'
        ]);

        CampaignIdeaOptions::create([
            'value' => 'Sell Event Tickets'
        ]);

        CampaignIdeaOptions::create([
            'value' => 'Increase Donations to a Cause'
        ]);

        CampaignIdeaOptions::create([
            'value' => 'Appointments Booked Online'
        ]);

        CampaignIdeaOptions::create([
            'value' => 'Something Else'
        ]);
    }
}
