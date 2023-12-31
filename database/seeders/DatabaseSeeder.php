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
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'Kevin',
            'email' => 'kevin@gmail.com',
            'password' => bcrypt('password')
        ]);

        User::factory()->create([
            'name' => 'Editor',
            'email' => 'editor@gmail.com',
            'password' => bcrypt('password')
        ]);

        $this->call([
            \Database\Seeders\RoleSeeder::class
        ]);

        User::find(1)->assignRole('admin');
        User::find(2)->assignRole('editor');
    }
}
