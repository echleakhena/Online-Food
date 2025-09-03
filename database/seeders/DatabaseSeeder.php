<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Ensure admin role exists
        Role::findOrCreate('admin');

        // Create super admin user (avoid duplicates)
        $super = User::firstOrCreate(
            ['email' => 'admin@gmail.com'], // unique field
            [
                'username' => 'Super Admin',
                'password' => Hash::make('password'),
                'phone' => '069470215',
            ]
        );

        
        
            $super->assignRole('admin');
        
    }
}