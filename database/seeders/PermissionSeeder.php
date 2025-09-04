<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // clear cache
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $permissions = [
            'users.create','users.delete','users.view',
            'categories.create','categories.update','categories.delete','categories.view',
            'foods.create','foods.update','foods.delete','foods.view',
            'customers.create','customers.update','customers.delete','customers.view',
            'orders.create','orders.update','orders.delete','orders.view',
            'deliveries.create','deliveries.update','deliveries.delete','deliveries.view',
            'receipts.create','receipts.update','receipts.delete','receipts.view',
            'dashboard.view',
        ];

        // create permissions
        foreach ($permissions as $permission) {
            Permission::findOrCreate($permission);
        }

        // create roles
        $admin = Role::findOrCreate('admin');
        $staff = Role::findOrCreate('staff');

        // assign permissions to admin
        $admin->syncPermissions($permissions);

        // assign limited permissions to staff
        $staff->syncPermissions([
            'categories.create','categories.update','categories.view',
            'foods.create','foods.update','foods.view',
            'customers.create','customers.update','customers.view',
            'orders.create','orders.update','orders.view',
            'deliveries.create','deliveries.update','deliveries.view',
            'receipts.create','receipts.update','receipts.view',
            'dashboard.view',
        ]);

        // clear cache again
        app()[PermissionRegistrar::class]->forgetCachedPermissions();
    }
}