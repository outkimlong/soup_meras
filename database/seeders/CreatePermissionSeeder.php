<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
class CreatePermissionSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            
            'user-list',
            'user-show',
            'user-create',
            'user-edit',
            'user-delete',

            'category-list',
            'category-show',
            'category-create',
            'category-edit',
            'category-delete',

            'product-list',
            'product-show',
            'product-create',
            'product-edit',
            'product-delete',

        ];
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
