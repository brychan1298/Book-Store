<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name" => "Riskya",
            "grade" => "1"
        ]);

        User::create([
            "name" => "Jevent",
            "grade" => "2"
        ]);
    }
}
