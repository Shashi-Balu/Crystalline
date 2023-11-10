<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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
                "image" => "https://images.unsplash.com/photo-1513558161293-cdaf765ed2fd?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "title" => "Luxury Series",
                "price" => "Rs. 29.99",
            ],
            [
                "productName" => "Opulent Champagne Flutes",
                "image" => "https://images.unsplash.com/photo-1544145945-f90425340c7e?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8ZHJpbmt8ZW58MHx8MHx8fDA%3D",
                "title" => "Crystal Elegance",
                "price" => "Rs. 34.99",
            ],
            [
                "productName" => "Regal Whiskey Decanter",
                "image" => "https://images.unsplash.com/photo-1497534446932-c925b458314e?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTh8fGRyaW5rfGVufDB8fDB8fHww",
                "title" => "Royal Edition",
                "price" => "Rs. 39.99",
            ],
            [
                "productName" => "Grand Goblet Set",
                "image" => "https://images.unsplash.com/photo-1587888637140-849b25d80ef9?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fGRyaW5rfGVufDB8fDB8fHww",
                "title" => "Opulence Series",
                "price" => "Rs. 27.99",
            ],
            [
                "productName" => "Exquisite Martini Glasses",
                "image" => "https://images.unsplash.com/photo-1534353473418-4cfa6c56fd38?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjJ8fGRyaW5rfGVufDB8fDB8fHww",
                "title" => "Signature Collection",
                "price" => "Rs. 31.99",
            ],
            [
                "productName" => "Majestic Highball Glasses",
                "image" => "https://images.unsplash.com/photo-1560526860-1f0e56046c85?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjN8fGRyaW5rfGVufDB8fDB8fHww",
                "title" => "Classic Style",
                "price" => "Rs. 22.99",
            ],
            [
                "productName" => "Sumptuous Wine Decanter",
                "image" => "https://images.unsplash.com/photo-1619158401201-8fa932695178?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzR8fGRyaW5rfGVufDB8fDB8fHww",
                "title" => "Vintage Charm",
                "price" => "Rs. 45.99",
            ],
            [
                "productName" => "Royal Crystal Carafe",
                "image" => "https://images.unsplash.com/photo-1623934397237-ce68cb0285b3?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzZ8fGRyaW5rfGVufDB8fDB8fHww",
                "title" => "Elite Edition",
                "price" => "Rs. 49.99",
            ],
        ]);
    }
}
