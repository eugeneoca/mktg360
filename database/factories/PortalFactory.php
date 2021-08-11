<?php

namespace Database\Factories;

use App\Models\Portal;
use Illuminate\Database\Eloquent\Factories\Factory;

class PortalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Portal::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => ''
        ];
    }
}
