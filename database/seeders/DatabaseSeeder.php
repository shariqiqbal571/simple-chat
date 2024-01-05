<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //  \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => ' User2',
            'email' => 'test2@example.com',
            'password'=>'12345678'
        ]);
        \App\Models\User::factory()->create([
            'name' => ' User3',
            'email' => 'test3@example.com',
            'password'=>'12345678'
        ]);
        \App\Models\User::factory()->create([
            'name' => ' User4',
            'email' => 'test4@example.com',
            'password'=>'12345678'
        ]);
        \App\Models\User::factory()->create([
            'name' => ' User5',
            'email' => 'test5@example.com',
            'password'=>'12345678'
        ]);


    }
}
