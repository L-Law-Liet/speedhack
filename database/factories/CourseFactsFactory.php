<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\CourseFacts;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CourseFacts::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'body' => $this->faker->realText(),
            'course_id' => Course::inRandomOrder()->first()->id
        ];
    }
}
