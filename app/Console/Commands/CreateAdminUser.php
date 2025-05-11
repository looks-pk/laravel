<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateAdminUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a default admin user for the system';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $adminEmail = 'digitalpartnerabdullah@gmail.com';
        
        if (User::where('email', $adminEmail)->exists()) {
            $this->info('Admin user already exists.');
            return 0;
        }
        
        User::create([
            'name' => 'Super Admin',
            'email' => $adminEmail,
            'password' => Hash::make($adminEmail),
            'is_admin' => true,
        ]);
        
        $this->info('Admin user created successfully.');
        $this->info('Email: ' . $adminEmail);
        $this->info('Password: ' . $adminEmail);
        
        return 0;
    }
} 