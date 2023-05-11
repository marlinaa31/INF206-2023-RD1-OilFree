<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name'=>'Aulia',
            'email'=>'aulia@gmail.com',
            'role'=>'deliveryman',
            'password'=>bcrypt('deliveryman')
        ]);
        User::create([
            'name'=>'Najla',
            'email'=>'najla@gmail.com',
            'role'=>'user',
            'password'=>bcrypt('user')
        ]);
    }
}
