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

        Product::create([
            'name' => 'Indomie  Goreng',
            'price' => '5000',
            'category_id' => 1
        ]);
        Product::create([
            'name' => 'Bihun Kuah',
            'price' => '6000',
            'category_id' => 1
        ]);
        Product::create([
            'name' => 'Teh Gelas',
            'price' => '2000',
            'category_id' => 1
        ]);

    }
}
