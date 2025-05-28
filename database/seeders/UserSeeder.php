<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'phone' => '02937326798',
            'start_date' => now(),
            'end_date' => now()->addYear(),
            'status' => 'active',
            'role' => 'admin',
            'password' => Hash::make('admin'),
        ]);
        User::create([
            'name' => 'Muhammad Zaky',
            'email' => 'mzaky@gmail.com',
            'phone' => '089699815885',
            'start_date' => now(),
            'end_date' => now()->addYear(),
            'status' => 'active',
            'password' => Hash::make('Zaky_1234'),
        ]);
        User::create([
            'name' => 'Fikri Sabili',
            'email' => 'fikrisabili@gmail.com',
            'phone' => '0895367089275',
            'start_date' => now(),
            'end_date' => now()->addYear(),
            'status' => 'active',
            'password' => Hash::make('Member123'),
        ]);
    }
}
