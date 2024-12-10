<?php

namespace Database\Seeders;

use App\Models\User;
use App\Enums\UserRoleEnum;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $admin = [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin123'),
                'role' => UserRoleEnum::admin,
                'tel' => '+998993552020',
                'created_at' => now(),
                'updated_at' => now()
        ];
            User::create($admin);
    }
}
