<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profile;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    { // esto me creara cada perfil por cada usuario
        \App\Models\User::factory(10)->create()->each(function ($user){
            Profile::factory()->create([
                'user_id' => $user->id,
            ]);
        });

        \App\Models\User::factory(10)->create();
        
        \App\Models\Category::factory(10)->create();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


    }
}
