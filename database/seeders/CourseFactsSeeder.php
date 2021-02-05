<?php

namespace Database\Seeders;

use App\Models\CourseFacts;
use Illuminate\Database\Seeder;

class CourseFactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CourseFacts::factory()->count(120)->create();
    }
}
