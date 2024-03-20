<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\DataCabang::factory(10)->create();

        User::create([
            'name' => 'Admin',
            'email'=>'admin@gmail.com',
            'level'=> 'admin',
            'password'=> bcrypt('admin'),
        ]);
    }
}
