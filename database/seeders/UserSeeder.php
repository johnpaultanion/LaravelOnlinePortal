<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'school' => 'test',
            'school_address' => 'test',
            'yeargrad' => 'test',
            'mobile_number' => 'test'

            
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin2@gmail.com',
            'password' => Hash::make('admin123'),
            'role' => 'teacher',
            'school' => 'test',
            'school_address' => 'test',
            'yeargrad' => 'test',
            'mobile_number' => 'test'
        ]);
        User::create([
            'name' => 'Johnpaul',
            'email' => 'admin3@gmail.com',
            'password' => Hash::make('admin123'),
            'role' => 'core',
            'school' => 'test',
            'school_address' => 'test',
            'yeargrad' => 'test',
            'mobile_number' => 'test'
        ]);
    }
}
