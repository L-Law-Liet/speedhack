<?php

namespace Database\Seeders;

use App\Models\Test;
use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Test::factory()->createMany([
            [
                'name' => 'С вариантами'
            ],
            [
                'name' => 'Перетаскиваемый'
            ],
            [
                'name' => 'Связываемый'
            ],
            [
                'name' => 'Дополнить одним словом'
            ],
            [
                'name' => 'Выбрать из списка'
            ],
        ]);
    }
}
