<?php

namespace Database\Factories;

use App\Models\AudienceLevel;
use Illuminate\Database\Eloquent\Factories\Factory;

class AudienceLevelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AudienceLevel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'description' => ''
        ];
    }
}
