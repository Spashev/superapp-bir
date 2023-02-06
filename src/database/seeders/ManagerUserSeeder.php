<?php

namespace Database\Seeders;

use App\Constants\UserRole;
use App\Models\Manager;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ManagerUserSeeder extends Seeder
{
    public function run(): void
    {
        $manager = Manager::create([
            'full_name' => 'Superuser',
            'email' => 'admin@gmail.com',
            'is_superuser' => 1,
            'email_verified_at' => now(),
            'password' => '!Q2w3e4r',
            'remember_token' => Str::random(10),
        ]);
        $manager->assignRole(UserRole::ADMIN_ROLE, UserRole::MANAGER_ROLE);
    }
}
