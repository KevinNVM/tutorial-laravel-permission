<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::create(['name' => 'admin']);
        $editor = Role::create(['name' => 'editor']);

        $perms1 = Permission::create(['name' => 'create, read, update posts']);
        $perms2 = Permission::create(['name' => 'delete post']);

        $admin->givePermissionTo($perms1, $perms2);
        $editor->givePermissionTo($perms1);
    }
}
