<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                "name"=> "iphone 11 pro max",
                "price"=> 600,
                "qty"=>12,
                "created_at"=>now(),
                "updated_at"=>now(),
            ],
            [
                "name"=> "iphone 12 pro max",
                "price"=> 800,
                "qty"=>10,
                "created_at"=>now(),
                "updated_at"=>now(),
            ],
            [
                "name"=> "iphone 15 pro max",
                "price"=> 1600,
                "qty"=>5,
                "created_at"=>now(),
                "updated_at"=>now(),
            ],
            [
                "name"=> "iphone 17 pro max",
                "price"=> 2000,
                "qty"=>5,
                "created_at"=>now(),
                "updated_at"=>now(),
            ],
            ];
            DB::table('products')->insert($products);
    }
}
