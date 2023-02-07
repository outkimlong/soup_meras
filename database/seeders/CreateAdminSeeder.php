<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminSeeder extends Seeder
{
    public function run()
    {
        $user = User::create([
            'roles_id' => '1',
            'name' => 'ROOT', 
            'password' => bcrypt('root'),
            'remember_token' => Str::random(60)
        ]);
        $role = Role::create(['name' => 'Root']);
        $permissions = Permission::pluck('id','id')->all();
        $role->syncPermissions($permissions);
        $user->assignRole([$role->id]);
    }
}
