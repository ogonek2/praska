<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateAdminUser extends Command
{
    protected $signature = 'make:admin-user';
    protected $description = 'Create an admin user for Filament';

    public function handle()
    {
        $name = $this->ask('What is the admin name?', 'Admin');
        $email = $this->ask('What is the admin email?', 'admin@admin.com');
        $password = $this->secret('What is the admin password?');

        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
            'email_verified_at' => now(),
        ]);

        $this->info('Admin user created successfully!');
        $this->info('Email: ' . $email);
        $this->info('Password: [hidden]');
    }
}
