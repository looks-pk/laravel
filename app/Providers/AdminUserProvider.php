<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
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
        // Only run if the users table exists
        try {
            if (Schema::hasTable('users')) {
                $this->ensureAdminUserExists();
            }
        } catch (\Exception $e) {
            // Silently fail during migrations or when DB is not available
        }
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
