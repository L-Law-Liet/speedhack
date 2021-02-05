<?php

namespace Database\Seeders;

use App\Models\CourseInfo;
use Illuminate\Database\Seeder;

class CourseInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CourseInfo::factory()->count(70)->create();
    }
}
