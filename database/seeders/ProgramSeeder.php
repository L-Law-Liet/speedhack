<?php

namespace Database\Seeders;

use App\Models\Program;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Program::factory()->count(150)->create();
            Program::factory()->createMany([
                [
                    'title' => 'Intro',
                    'count' => 4,
                    'homeworks' => 3,
                    'course_id' => 1
                ],
                [
                    'title' => 'Getting started',
                    'count' => 2,
                    'homeworks' => 3,
                    'course_id' => 1
                ],
                [
                    'title' => 'Basics',
                    'count' => 6,
                    'homeworks' => 2,
                    'course_id' => 1
                ],
                [
                    'title' => 'Intro',
                    'count' => 4,
                    'homeworks' => 3,
                    'course_id' => 2
                ],
                [
                    'title' => 'Getting started',
                    'count' => 2,
                    'homeworks' => 3,
                    'course_id' => 2
                ],
                [
                    'title' => 'Basics',
                    'count' => 6,
                    'homeworks' => 2,
                    'course_id' => 2
                ],
                [
                    'title' => 'Intro',
                    'count' => 4,
                    'homeworks' => 3,
                    'course_id' => 3
                ],
                [
                    'title' => 'Getting started',
                    'count' => 2,
                    'homeworks' => 3,
                    'course_id' => 3
                ],
                [
                    'title' => 'Basics',
                    'count' => 6,
                    'homeworks' => 2,
                    'course_id' => 3
                ],
        ]);
    }
}
