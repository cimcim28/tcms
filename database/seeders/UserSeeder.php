<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::factory(5)->create();

        User::create([
            'name' => 'User 1',
            'email' => 'user1@mailinator.com',
            'email_verified_at' => null,
            'organization' => null,
            'password' => Hash::make('123456'), // password
            ]);
    }
}