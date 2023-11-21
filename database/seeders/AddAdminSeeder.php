<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AddAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'admin',
            'no_telp' => '08123456789',
            'email'=> 'admin123@gmail.com',
            'password' => bcrypt('Admin123')

        ]);

        $user = User::create([
            'name' => 'user',
            'no_telp' => '08123456674',
            'email'=> 'user@gmail.com',
            'password' => bcrypt('password')

        ]);

        $admin->assignRole('admin');
    }
}
