<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory(2)->create();
        
        Category::create([
            'name' => 'Food',
            'slug' => 'food'
        ]);

        Category::create([
            'name' => 'Beverage',
            'slug' => 'beverage'
        ]);

        Product::factory(15)->create();

    }
}
