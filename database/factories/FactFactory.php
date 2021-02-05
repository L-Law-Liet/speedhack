<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Fact;
use Illuminate\Database\Eloquent\Factories\Factory;

class FactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Fact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title,
            'subtitle' => $this->faker->words(3, true),
            'course_id' => Course::inRandomOrder()->first()->id,
        ];
    }
}
