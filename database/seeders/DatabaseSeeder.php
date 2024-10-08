<?php

namespace Database\Seeders;

use App\Models\LoanApplication;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Suer Admin',
        //     'email' => 'admin@localhost.com',
        //     'password' => Hash::make('123456')
        // ]);

        LoanApplication::factory(100)->create();
    }
}
