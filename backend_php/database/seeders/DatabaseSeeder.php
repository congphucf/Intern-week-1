<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        
        DB::table('stores')->insert([
            ["id" => 1, "name"=> "Ding Tea"],
            ["id" => 2, "name"=> "Tocotoco"],
            ["id" => 3, "name"=> "Gongcha"],
            ["id" => 4, "name"=> "Lete"],
        ]);

        DB::table('products')->insert([
            [
                'id' => 1,
                'name' => 'Royal Milk Tea',
                'price' => 4.8,
                'toppings' => 'Milk foam,white pearl'
            ],
            [
                'id' => 2,
                'name' => 'Green Milk Tea',
                'price' => 4.6,
                'toppings' => 'pearl'
            ],
            [
                'id' => 3,
                'name' => 'Oolong Milk Tea',
                'price' => 5.1,
                'toppings' => 'Pearl, milk foam'
            ],
            [
                'id' => 4,
                'name' => 'Blueberry Milk Tea',
                'price' => 5.1,
                'toppings' => 'Pearl, milk foam'
            ],
            [
                'id' => 5,
                'name' => 'Mango Milk Tea',
                'price' => 5.1,
                'toppings' => 'Aloe, Pearl'
            ]
        ]);

        DB::table('storeproducts')->insert([
            [
                'id' => 1,
                'shop' => 1,
                'product' => 1
            ],
            [
                'id' => 2,
                'shop' => 1,
                'product' => 2
            ],
            [
                'id' => 3,
                'shop' => 2,
                'product' => 2
            ],
            [
                'id' => 4,
                'shop' => 1,
                'product' => 3
            ],
            [
                'id' => 5,
                'shop' => 3,
                'product' => 3
            ],
            [
                'id' => 6,
                'shop' => 1,
                'product' => 1
            ],
            [
                'id' => 7,
                'shop' => 3,
                'product' => 1
            ],
            [
                'id' => 8,
                'shop' => 3,
                'product' => 4
            ],
            [
                'id' => 9,
                'shop' => 1,
                'product' => 4
            ],
            [
                'id' => 10,
                'shop' => 2,
                'product' => 5
            ]
        ]);
    }
}
