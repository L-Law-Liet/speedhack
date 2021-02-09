<?php

namespace Database\Seeders;

use App\Models\Lesson;
use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lesson::factory()->count(80)->create();
//        Lesson::factory()->createMany([
//            [
//                'title' => 'Present Simple',
//                'min' => 4,
//                'file' => 3,
//                'program_id' => 1
//            ],
//        ]);
    }
}
