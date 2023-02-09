<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'Admin',
        ]);

        Role::create([
            'name' => 'User',
        ]);

        User::create([
            'name' => 'Admin 1',
            'email' => 'admin@gmail.com',
            'password' => \bcrypt('admin123'),
            'dob' => Carbon::parse('2002-07-10'),
            'gender' => 'Male',
            'country' => 'Indonesia',
            'role_id' => 1,
        ]);

        User::create([
            'name' => 'User 1',
            'email' => 'user@gmail.com',
            'password' => \bcrypt('user123'),
            'dob' => Carbon::parse('2002-07-10'),
            'gender' => 'Male',
            'country' => 'Indonesia',
            'role_id' => 2,
        ]);
    }
}