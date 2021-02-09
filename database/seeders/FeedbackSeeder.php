<?php

namespace Database\Seeders;

use App\Models\Feedback;
use Illuminate\Database\Seeder;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Feedback::factory()->count(30)->create();
        Feedback::factory()->createMany([
            [
                'name' => 'Нурбеков Еркебулан',
                'image' => 'public/images/users/avatar-1.jpg',
                'rate' => '4',
                'text' => 'Этот курс прошел на Ураа! Отдельно ограмное спасибо моему учителю Айдын агай. Сейчас мой уровень английского языка стал намного лучше и программа у вас самая. Этот курс прошел на Ураа! Отдельно Сейчас мой уровень английского языка стал намного лучше и программа у вас самая.',
            ],
            [
                'name' => 'Махметова Азиза',
                'image' => 'public/images/users/avatar-2.jpg',
                'rate' => '5',
                'text' => 'Этот курс прошел на Ураа! Отдельно ограмное спасибо моему учителю Айдын агай. Сейчас мой уровень английского языка стал намного лучше и программа у вас самая. Этот курс прошел на Ураа! Отдельно Сейчас мой уровень английского языка стал намного лучше и программа у вас самая.',
            ],
            [
                'name' => 'Нурбеков Еркебулан',
                'image' => 'public/images/users/avatar-3.jpg',
                'rate' => '5',
                'text' => 'Этот курс прошел на Ураа! Отдельно ограмное спасибо моему учителю Айдын агай. Сейчас мой уровень английского языка стал намного лучше и программа у вас самая. Этот курс прошел на Ураа! Отдельно Сейчас мой уровень английского языка стал намного лучше и программа у вас самая.',
            ],
        ]);
    }
}
