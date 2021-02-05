<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ApplicationStatus;

class ApplicationStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Admin
        $adminUser = \Brackets\AdminAuth\Models\AdminUser::create([
            'first_name' => 'admin',
            'last_name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt(123456),
            'remember_token' => null,
            'activated' => true,
            'forbidden' => false,
            'language' => 'ru',
            'deleted_at' => null,
            'created_at' => null,
            'updated_at' => null,
            'last_login_at' => null,
        ]);
        $adminUser->assignRole('Administrator');
        //Admin
        
        $status = [
            [
                'name' => 'Новая заявка',
            ],
            [
                'name' => 'Ожидается',
            ],
            [
                'name' => 'Успешно',
            ],
           
        ];

        ApplicationStatus::insert($status);

    }
}
