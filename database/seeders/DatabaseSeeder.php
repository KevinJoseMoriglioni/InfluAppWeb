<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\{Role, Permission};

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $adminRole = Role::create(['name'=>'Admin']);
        $adminRoutesPermission = Permission::create(['name'=>'AdminRoutes']);
        $adminRole->givePermissionTo($adminRoutesPermission);
        
        $user = \App\Models\User::factory()->create([
            'name' => 'The Name',
            'email' => 'thename@gmail.com',
            'password'=>bcrypt('password')
        ]);

        $user->assignRole('Admin');
    }
}
