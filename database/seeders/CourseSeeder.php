<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Course::factory()->count(30)->create();
        Course::factory()->createMany([
            [
                'title' => 'Онлайн-обучение General English',
                'image' => 'public/images/bg/banner-10.jpg',
                'body' => 'Начните онлайн-обучение вместе с нами. Уже 2300 учеников прошли профессиональное обучение.',
                'duration' => '18 месяцев',
                'course_category_id' => '1',
                ],
            [
                'title' => 'Онлайн-обучение General English 3',
                'image' => 'public/images/bg/banner-10.jpg',
                'body' => 'Начните онлайн-обучение вместе с нами. Уже 2300 учеников прошли профессиональное обучение.',
                'duration' => '16 месяцев',
                'course_category_id' => '1',
            ],
            [
                'title' => 'Онлайн-обучение General English 2',
                'image' => 'public/images/bg/banner-10.jpg',
                'body' => 'Начните онлайн-обучение вместе с нами. Уже 2300 учеников прошли профессиональное обучение.',
                'duration' => '13 месяцев',
                'course_category_id' => '2',
            ],
        ]);
    }
}
