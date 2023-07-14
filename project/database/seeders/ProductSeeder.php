<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $a = new Product();
        // $a->name = 'kfhk';
        // $a->price = '34876';
        // $a->size = 's';
        // $a->photo = 'storage/images/products/1.jpeg';
        // $a->save();
        // $b = new Product();
        // $b->name = 'kfhk';
        // $b->price = '34876';
        // $b->size = 's';
        // $b->photo = 'storage/images/products/2.jpeg';
        // $b->save();

        Product::factory(3200)->create();
    }
}
