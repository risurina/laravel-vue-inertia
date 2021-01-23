<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory([
            'email' => 'demo@demo.com.au',
            'password' => \Hash::make('hello2020')
        ])->create();
    }
}
