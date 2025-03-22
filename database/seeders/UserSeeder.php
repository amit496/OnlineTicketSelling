<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            [
                "email" => "gautamamit557@gmail.com", 
            ],
            [
                "name" => "Super Admin",
                "contact" => "1231231231",
                "password" => Hash::make('123456'),
            ]
        );
    }
}
