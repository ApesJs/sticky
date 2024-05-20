<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Asep Jaenudin Sutarji',
            'email' => 'asepjaenudinsutarji@gmail.com',
            'password' => bcrypt('apesjs123'),
            'email_verified_at' => now()
        ]);
    }
}
