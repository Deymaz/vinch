<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'login' => 'admin',
            'email' => 'admin@test.com',
            'password' => Hash::make('devEnv'),
            'role' => 2
        ]);
    }
}
