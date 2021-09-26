<?php

namespace Database\Factories;

use App\Models\Ayat;
use Illuminate\Database\Eloquent\Factories\Factory;

class AyatFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ayat::class;

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
