<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\ServiceProvider;

class AdminUserProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->ensureAdminUserExists();
    }

    /**
     * Ensure that a default admin user exists in the system.
     */
    protected function ensureAdminUserExists(): void
    {
        $adminEmail = 'digitalpartnerabdullah@gmail.com';
        
        if (!User::where('email', $adminEmail)->exists()) {
            User::create([
                'name' => 'Super Admin',
                'email' => $adminEmail,
                'password' => Hash::make($adminEmail), // Using email as password as requested
                'is_admin' => true,
            ]);
        }
    }
}
