<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    public function run(): void
    {
        Permission::create(['guard_name' => 'manager', 'name' => 'create-users']);
        Permission::create(['guard_name' => 'manager', 'name' => 'edit-users']);
        Permission::create(['guard_name' => 'manager', 'name' => 'delete-users']);

        Permission::create(['guard_name' => 'manager', 'name' => 'create-category']);
        Permission::create(['guard_name' => 'manager', 'name' => 'edit-category']);
        Permission::create(['guard_name' => 'manager', 'name' => 'delete-category']);

        Permission::create(['guard_name' => 'web', 'name' => 'view-product']);
        Permission::create(['guard_name' => 'manager', 'name' => 'create-product']);
        Permission::create(['guard_name' => 'manager', 'name' => 'edit-product']);
        Permission::create(['guard_name' => 'manager', 'name' => 'delete-product']);
        Permission::create(['guard_name' => 'manager', 'name' => 'activate-product']);

        Permission::create(['guard_name' => 'manager', 'name' => 'create-amenity']);
        Permission::create(['guard_name' => 'manager', 'name' => 'edit-amenity']);
        Permission::create(['guard_name' => 'manager', 'name' => 'delete-amenity']);

        Permission::create(['guard_name' => 'manager', 'name' => 'change-user-role']);

        $adminRole = Role::create(['guard_name' => 'manager', 'name' => 'admin']);
        $managerRole = Role::create(['guard_name' => 'manager', 'name' => 'manager']);
        $clientRole = Role::create(['guard_name' => 'web', 'name' => 'client']);

        $clientRole->givePermissionTo(['view-product']);

        $adminRole->givePermissionTo(Permission::where('guard_name', 'manager')->get());

        $managerRole->givePermissionTo([
            'create-product',
            'edit-product',
            'delete-product',
        ]);
    }
}
