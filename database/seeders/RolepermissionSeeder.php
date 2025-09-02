<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        // Clear cached permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // Create roles
        $admin = Role::firstOrCreate(['name' => 'admin', 'guard_name' => 'web']);
        $manager = Role::firstOrCreate(['name' => 'manager', 'guard_name' => 'web']);

        // Define all permissions
        $permissions = [
            'users.create','users.delete','users.view',
            'categories.add','categories.update','categories.delete','categories.view',
            'foods.add','foods.update','foods.delete','foods.view',
            'customers.add','customers.update','customers.delete','customers.view',
            'orders.add','orders.update','orders.delete','orders.view',
            'deliveries.add','deliveries.update','deliveries.delete','deliveries.view',
            'receipts.add','receipts.update','receipts.delete','receipts.view',
            'dashboard.view',
        ];

        // Create permissions
        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission, 'guard_name' => 'web']);
        }

        // Assign permissions
        $admin->syncPermissions($permissions);

        $managerPermissions = [
            'users.view',
            'categories.add','categories.update','categories.delete','categories.view',
            'foods.add','foods.update','foods.delete','foods.view',
            'customers.add','customers.update','customers.delete','customers.view',
            'orders.add','orders.update','orders.delete','orders.view',
            'deliveries.add','deliveries.update','deliveries.delete','deliveries.view',
            'receipts.add','receipts.update','receipts.delete','receipts.view',
            'dashboard.view',
        ];

        $manager->syncPermissions($managerPermissions);

        // Create super admin user
        $super = User::create([
            'name' => 'Super Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $super->assignRole('admin');
    }
}
