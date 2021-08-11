<?php

namespace Database\Factories;

use App\Models\CampaignIdeaOptions;
use Illuminate\Database\Eloquent\Factories\Factory;

class CampaignIdeaOptionsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CampaignIdeaOptions::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'value' => ''
        ];
    }
}
