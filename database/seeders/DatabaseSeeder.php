<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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

        Category::create([
            'name' => 'Makanan'
        ]);

        Category::create([
            'name' => 'Minuman'
        ]);

        Category::create([
            'name' => 'Sembako'
        ]);


    }
}
