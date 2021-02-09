<?php

namespace Database\Factories;

use App\Models\Option;
use Illuminate\Database\Eloquent\Factories\Factory;

class OptionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Option::class;
    private $id = 1;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = $this->faker;
        $body = $faker->words(3, true);
        $qid = $this->id%6+1;
        $is_true = false;
        $this->id++;
        switch ($qid){
            case 4:
                $is_true = true;
                break;
            case 5:
                $body = $faker->words(1, true);
                $is_true = true;
                break;
            case 6:
                $body = $faker->words(1, true);
                $is_true = true;
                break;
            default:
                if ($qid%3 == 0){
                    $is_true = true;
                }
        }
        return [
            'body' => $body,
            'is_true' => $is_true,
            'question_id' => '',
        ];
    }
}
