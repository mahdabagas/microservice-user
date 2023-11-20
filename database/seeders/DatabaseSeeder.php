<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name'=>'admin1',
            'email'=>'admin1@gmail.com',
            'role'=>'admin',
            'password'=>bcrypt('12345678'),
        ]);
        User::create([
            'name'=>'admin2',
            'email'=>'admin2@gmail.com',
            'role'=>'admin',
            'password'=>bcrypt('12345678'),
        ]);
        User::create([
            'name'=>'teacher1',
            'email'=>'teacher1@gmail.com',
            'role'=>'teacher',
            'password'=>bcrypt('12345678'),
        ]);
        User::create([
            'name'=>'teacher2',
            'email'=>'teacher2@gmail.com',
            'role'=>'teacher',
            'password'=>bcrypt('12345678'),
        ]);
        User::create([
            'name'=>'student1',
            'email'=>'student1@gmail.com',
            'role'=>'student',
            'password'=>bcrypt('12345678'),
        ]);
        User::create([
            'name'=>'student2',
            'email'=>'student2@gmail.com',
            'role'=>'student',
            'password'=>bcrypt('12345678'),
        ]);
    }
}
