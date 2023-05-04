<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserAndRoleTableSeeder extends Seeder
{
    public function run()
    {
        $adminRole = Role::create(['name' => 'admin']); 
        
        $studentRole = Role::create(['name' => 'student']);
        //$assistantRole = Role::create(['name' => 'assistant']);
        $guidanceRole = Role::create(['name' => 'guidance']);
        
        $admin = User::create([ 
            'fname' => 'Super',
            'lname' => 'Admin',
            'email' => 'superadmin@pist-osas.com',
            'user_type' => '1',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
        $admin->assignRole('admin');
    }
}
