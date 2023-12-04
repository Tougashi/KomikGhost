<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

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
        Role::create([
            'role' => 'Admin',
            'created_at' => Carbon::now()
        ]);
        Role::create([
            'role' => 'User',
            'created_at' => Carbon::now()
        ]);


        User::create([
            'username' => 'Adryan',
            'email' => 'adryanowh@gmail.com',
            'password' => Hash::make('Fanydarat1121'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'role_id' => '1',
        ]);

        Category::create([
            'nama' => 'DC',
            'slug' => 'dc',
            'created_at' => Carbon::now()
        ]);
        Category::create([
            'nama' => 'Marvel',
            'slug' => 'marvel',
            'created_at' => Carbon::now()
        ]);
        Category::create([
            'nama' => 'X-Men',
            'slug' => 'x-men',
            'created_at' => Carbon::now()
        ]);
        Category::create([
            'nama' => 'Vertigo',
            'slug' => 'vertigo',
            'created_at' => Carbon::now()
        ]);

      
    }
}
