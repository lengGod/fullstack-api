<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Ale-Ale',
            'description' => 'Ini adalah minuman produk Ale-ale',
            'price' => 2000.00,
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([
            'name' => 'Teh Gelas',
            'description' => 'Ini adalah minuman produk teh gelas',
            'price' => 5000.00,
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([
            'name' => 'Magnum',
            'description' => 'Ini es krim Magnum',
            'price' => 12000.00,
            'category_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
