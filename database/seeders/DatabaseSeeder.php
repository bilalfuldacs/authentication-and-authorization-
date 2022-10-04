<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\User;
use App\Models\Post;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
     

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
         User::create(['name'=>"bilal",
         'password'=>bcrypt('password'),
         'email'=>"bilal@gmail.com",
         'role'=>"editor"]);
         User::create(['name'=>"bilal",
         'password'=>bcrypt('password'),
         'email'=>"bilal@gmail.con",
         'role'=>"user"]);
         User::create(['name'=>"bilal",
         'password'=>bcrypt('password'),
         'email'=>"bilal@gmail.cob",
         'role'=>"admin"]);
         Post::factory(10)->create();
    }
    
}
