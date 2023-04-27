<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'kinder',
            'img' => 'kinder.jpg',
            'cost' => 50,
            'created_at' => '2023-04-11 05:58:05',
            'updated_at' => '2023-04-25 05:58:05'
        ]);

        Product::create([
            'name' => 'raffaello',
            'img' => 'raffaello.jpg',
            'cost' => 280,
            'created_at' => '2023-04-06 05:58:05',
            'updated_at' => '2023-04-22 05:58:05'
        ]);

        Product::create([
            'name' => 'alpen gold',
            'img' => 'alpengold.jpg',
            'cost' => 35,
            'created_at' => '2023-04-28 06:02:46',
            'updated_at' => '2023-04-02 06:02:46'
        ]);

        Product::create([
            'name' => 'kitkat',
            'img' => 'kitkat.jpg',
            'cost' => 90,
            'created_at' => '2023-04-03 06:16:04',
            'updated_at' => '2023-04-19 06:16:04'
        ]);

        Product::create([
            'name' => 'twix',
            'img' => 'twix.jpg',
            'cost' => 24,
            'created_at' => '2023-04-25 06:18:09',
            'updated_at' => '2023-04-29 06:18:09'
        ]);

        Product::create([
            'name' => 'barni',
            'img' => 'barni.jpg',
            'cost' => 57,
            'created_at' => '2023-04-03 06:18:47',
            'updated_at' => '2023-04-27 06:18:47'
        ]);
    }
}
