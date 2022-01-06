<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Product::factory(30)->create();

        Category::create([
            'name' => 'Makanan'
        ]);

        Category::create([
            'name' => 'Minuman'
        ]);

        Category::create([
            'name' => 'Sembako'
        ]);


        User::create([
            'name' => 'Fikri Fauzan',
            'username' => 'fikrifauzans',
            'email' => 'fikrifauzans.goku@gmail.com',
            'password' => bcrypt('vanilla')

        ]);
    }
}
