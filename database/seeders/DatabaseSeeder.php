<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CourseCategorySeeder::class,
            CourseSeeder::class,
            CertificateSeeder::class,
            NewsSeeder::class,
            FeedbackSeeder::class,
            CourseFactsSeeder::class,
            CourseInfoSeeder::class,
            FactSeeder::class,
            ProgramSeeder::class,
            LessonSeeder::class,
        ]);
    }
}
