<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            [
                'name' => 'Zaidan Pasya',
                'email' => 'zaidan@example.com',
                'age' => 20,
                'gender' => 'male',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Novan Nur',
                'email' => 'Novan@example.com',
                'age' => 22,
                'gender' => 'male',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sigma Girl',
                'email' => 'Sigma@example.com',
                'age' => 21,
                'gender' => 'female',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
