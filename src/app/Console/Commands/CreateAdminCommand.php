<?php

namespace App\Console\Commands;

use App\Constants\UserRole;
use App\Models\Manager;
use Illuminate\Console\Command;
use Spatie\Permission\Models\Role;

class CreateAdminCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create superuser admin.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $email = $this->ask('Email: ');
        $username = $this->ask('Username: ');
        $password = $this->secret('Password: ');
        $manager = Manager::create([
            'email' => $email,
            'full_name' => $username,
            'password' => $password,
        ]);
        $manager->assignRole(UserRole::ADMIN_ROLE);

        $this->info('Admin user created successfully!');
        return Command::SUCCESS;
    }
}
