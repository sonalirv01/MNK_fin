<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'user_id' => 'admin',
            'name' => 'Admin',
            'email' => 'sonalisv01@gmail.com',
            'password' => Hash::make('Admin@123'), // Change password
            'is_admin' => true
        ]);
    }
}
