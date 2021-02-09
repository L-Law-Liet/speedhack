<?php

namespace Database\Seeders;

use App\Models\Fact;
use Illuminate\Database\Seeder;

class FactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Fact::factory()->count(100)->create();
        Fact::factory()->createMany([
            [
                'title' => '2 месяца',
                'subtitle' => 'онлайн-продуктивного обучения',
                'course_id' => 1
            ],
            [
                'title' => 'Обучение',
                'subtitle' => 'на реальных данных',
                'course_id' => 1
            ],
            [
                'title' => 'Язык',
                'subtitle' => 'английский, руский',
                'course_id' => 1
            ],
            [
                'title' => 'Расписание',
                'subtitle' => 'гибкое расписание',
                'course_id' => 1
            ],
            [
                'title' => '2 месяца',
                'subtitle' => 'онлайн-продуктивного обучения',
                'course_id' => 2
            ],
            [
                'title' => 'Обучение',
                'subtitle' => 'на реальных данных',
                'course_id' => 2
            ],
            [
                'title' => 'Язык',
                'subtitle' => 'английский, руский',
                'course_id' => 2
            ],
            [
                'title' => 'Расписание',
                'subtitle' => 'гибкое расписание',
                'course_id' => 2
            ],
            [
                'title' => '2 месяца',
                'subtitle' => 'онлайн-продуктивного обучения',
                'course_id' => 3
            ],
            [
                'title' => 'Обучение',
                'subtitle' => 'на реальных данных',
                'course_id' => 3
            ],
            [
                'title' => 'Язык',
                'subtitle' => 'английский, руский',
                'course_id' => 3
            ],
            [
                'title' => 'Расписание',
                'subtitle' => 'гибкое расписание',
                'course_id' => 3
            ],
        ]);
    }
}
