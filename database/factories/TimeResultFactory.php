<?php

namespace Database\Factories;

use App\Models\TimeResult;
use Illuminate\Database\Eloquent\Factories\Factory;

class TimeResultFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TimeResult::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $numbers = array(0,1,2,3,4,5,6,7,8,9);

        return [
            'rolls' => $this->faker->randomElements($numbers, 12, true),
        ];
    }
}
