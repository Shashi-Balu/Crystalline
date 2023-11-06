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
    public function run()
    {
        DB::table('products')->insert([
            [
                "productName" => "Sophisticate Wine Glasses",
                "image" => asset('storage/images/image-1.jpg'),
                "title" => "Luxury Series",
                "price" => "$29.99",
            ],
            [
                "productName" => "Opulent Champagne Flutes",
                "image" => asset('storage/images/image-2.jpg'),
                "title" => "Crystal Elegance",
                "price" => "$34.99",
            ],
            [
                "productName" => "Regal Whiskey Decanter",
                "image" => asset('storage/images/image-3.jpg'),
                "title" => "Royal Edition",
                "price" => "$39.99",
            ],
            [
                "productName" => "Grand Goblet Set",
                "image" => asset('storage/images/image-4.jpg'),
                "title" => "Opulence Series",
                "price" => "$27.99",
            ],
            [
                "productName" => "Exquisite Martini Glasses",
                "image" => asset('storage/images/image-5.jpg'),
                "title" => "Signature Collection",
                "price" => "$31.99",
            ],
            [
                "productName" => "Majestic Highball Glasses",
                "image" => asset('storage/images/image-6.jpg'),
                "title" => "Classic Style",
                "price" => "$22.99",
            ],
            [
                "productName" => "Sumptuous Wine Decanter",
                "image" => asset('storage/images/image-7.jpg'),
                "title" => "Vintage Charm",
                "price" => "$45.99",
            ],
            [
                "productName" => "Royal Crystal Carafe",
                "image" => asset('storage/images/image-8.jpg'),
                "title" => "Elite Edition",
                "price" => "$49.99",
            ],
        ]);
    }
}
