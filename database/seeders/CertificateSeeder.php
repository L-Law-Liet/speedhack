<?php

namespace Database\Seeders;

use App\Models\Certificate;
use Illuminate\Database\Seeder;

class CertificateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Certificate::factory()->count(30)->create();
        Certificate::factory()->createMany([
            [
                'title' => 'Вы получите сертификат',
                'image' => 'public/images/bg/certificate.jpg',
                'body' => 'После окончания курса вы получите Сертификат. Данный сертификат будет подтверждением тому, что вы успешно прошли 3.5-месячную обучающую программу по курсу “General English” в онлайн-школе “SpeedHuck”.',
                'course_id' => '1',
            ],
            [
                'title' => 'Вы получите сертификат 2',
                'image' => 'public/images/bg/certificate.jpg',
                'body' => 'После окончания курса вы получите Сертификат. Данный сертификат будет подтверждением тому, что вы успешно прошли 3.5-месячную обучающую программу по курсу “General English” в онлайн-школе “SpeedHuck”.',
                'course_id' => '2',
            ],
            [
                'title' => 'Вы получите сертификат 3',
                'image' => 'public/images/bg/certificate.jpg',
                'body' => 'После окончания курса вы получите Сертификат. Данный сертификат будет подтверждением тому, что вы успешно прошли 3.5-месячную обучающую программу по курсу “General English” в онлайн-школе “SpeedHuck”.',
                'course_id' => '3',
            ],
        ]);
    }
}
