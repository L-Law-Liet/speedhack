<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        News::factory()->count(30)->create();

        News::factory()->createMany([
            [
                'title' => 'Онлайн обучение',
                'image' => 'public/images/ilustration/news-1.jpg',
                'date' => '22 сентябрь, 2020',
                'body' => 'У нас открылись курсы по рисованию. Если вы любите рисовать, тогда этот курс именно для вас. Вы просили мы добавили!',
            ],
            [
                'title' => 'Новая методика',
                'image' => 'public/images/bg/news-2.jpg',
                'date' => '18 август, 2020',
                'body' => 'Большинство курсов мы проводим в формате живой трансляции. Вы не просто слушаете лекции.',
            ],
            [
                'title' => 'Учитель путеводитель',
                'image' => 'public/images/bg/news-3.jpg',
                'date' => '28 июль, 2020',
                'body' => 'У нас открылись курсы по рисованию. Если вы любите рисовать, тогда этот курс именно для вас. Ты можешь увидеть результат!',
            ],
        ]);
    }
}
