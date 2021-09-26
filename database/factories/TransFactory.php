<?php

namespace Database\Factories;

use App\Models\Trans;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Trans::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'text' => $this->faker->name()
        ];
    }
}
