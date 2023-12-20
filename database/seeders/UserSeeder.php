<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(20)->create();
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now (),
            'phone' => '6281234567899',
            'bio' => 'flutter dev',
            'role' => 'admin',
            'password' => Hash::make('admin'),
        ]);

         User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'email_verified_at' => now (),
            'phone' => '6281234567891',
            'bio' => 'flutter dev',
            'role' => 'superadmin',
            'password' => Hash::make('admin'),
        ]);
    }
}
