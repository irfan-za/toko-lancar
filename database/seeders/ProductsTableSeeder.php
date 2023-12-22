<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductsTableSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'Beras Rojo Lele 5kg',
                'price' => 100,
                'stock' => 50,
                'category_id' => 1,
                'description' => 'Beras Rojo Lele kualitas bagus, berat bersih 5kg',
            ],
            [
                'name' => 'Minyak Goreng Filma 2L',
                'price' => 30,
                'stock' => 100,
                'category_id' => 1,
                'description' => 'Minyak goreng Filma, berat bersih 2 liter',
            ],
            [
                'name' => 'Gula Pasir Gulaku 1kg',
                'price' => 15,
                'stock' => 80,
                'category_id' => 1,
                'description' => 'Gula pasir Gulaku, berat bersih 1kg',
            ],
            [
                'name' => 'Sabun Mandi Lifebuoy 100g',
                'price' => 5,
                'stock' => 200,
                'category_id' => 6,
                'description' => 'Sabun mandi Lifebuoy, berat bersih 100 gram',
            ],
            [
                'name' => 'Kopi Kapal Api 200g',
                'price' => 25,
                'stock' => 60,
                'category_id' => 3,
                'description' => 'Kopi Kapal Api, berat bersih 200 gram',
            ],
            [
                'name' => 'Mi Instan Indomie Rasa Soto 5pcs',
                'price' => 10,
                'stock' => 120,
                'category_id' => 7,
                'description' => 'Mi instan Indomie rasa soto, isi 5 bungkus',
            ],
            [
                'name' => 'Pisang Raja 1kg',
                'price' => 10,
                'stock' => 40,
                'category_id' => 1,
                'description' => 'Pisang Raja, berat bersih 1kg',
            ],
            [
                'name' => 'Minuman Coca-Cola 1.5L',
                'price' => 12,
                'stock' => 75,
                'category_id' => 3,
                'description' => 'Minuman Coca-Cola, berat bersih 1.5 liter',
            ],
            [
                'name' => 'Mie Telor Merek ABC 200g',
                'price' => 8,
                'stock' => 90,
                'category_id' => 7,
                'description' => 'Mie telor merek ABC, berat bersih 200 gram',
            ],
            [
                'name' => 'Sikat Gigi Pepsodent 2pcs',
                'price' => 5,
                'stock' => 150,
                'category_id' => 6,
                'description' => 'Sikat gigi Pepsodent, isi 2 buah',
            ],
            [
                'name' => 'Piring Keramik',
                'price' => 20,
                'stock' => 30,
                'category_id' => 2,
                'description' => 'Piring keramik berkualitas tinggi.'
            ],
            [
                'name' => 'Gelas Plastik',
                'price' => 5,
                'stock' => 100,
                'category_id' => 2,
                'description' => 'Gelas plastik multifungsi.'
            ],
            [
                'name' => 'Panci Aluminium 5L',
                'price' => 50,
                'stock' => 40,
                'category_id' => 2,
                'description' => 'Panci aluminium berkualitas.'
            ],
            [
                'name' => 'Sapu Serbaguna',
                'price' => 10,
                'stock' => 60,
                'category_id' => 2,
                'description' => 'Sapu serbaguna dengan pegangan kuat.'
            ],
            [
                'name' => 'Tatakan Toples',
                'price' => 5,
                'stock' => 80,
                'category_id' => 2,
                'description' => 'Tatakan untuk toples makanan.'
            ],
        ];

        // Memasukkan data produk ke dalam tabel
        DB::table('products')->insert($products);
    
    }
}
