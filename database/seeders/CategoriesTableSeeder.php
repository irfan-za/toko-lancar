<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Bahan Sembako',
                'description' => 'Barang-barang sembako seperti beras, tepung terigu, minyak, gula, telur, dan beberapa barang pokok lainnya.',
            ],
            [
                'name' => 'Peralatan Rumah',
                'description' => 'Peralatan rumah tangga seperti piring, gelas, panci, dan lainnya.',
            ],
            [
                'name' => 'Minuman',
                'description' => 'Minuman seperti kopi, teh, jus, dan air minum.',
            ],
            [
                'name' => 'Kue dan Roti',
                'description' => 'Kue dan roti segar.',
            ],
            [
                'name' => 'Peralatan Dapur',
                'description' => 'Peralatan dapur seperti pisau, sendok, garpu, dan lainnya.',
            ],
            [
                'name' => 'Produk Kebersihan',
                'description' => 'Produk kebersihan seperti sabun, deterjen, sikat, dan lainnya.',
            ],
            [
                'name' => 'Perlengkapan Bayi',
                'description' => 'Perlengkapan bayi seperti popok, susu, botol, dan mainan.',
            ],
            [
                'name' => 'Obat dan Vitamin',
                'description' => 'Obat-obatan dan vitamin.',
            ],
            [
                'name' => 'Bumbu Dapur',
                'description' => 'Bumbu-bumbu dapur seperti garam, gula, merica, dan lainnya.',
            ],
            [
                'name' => 'Makanan Beku',
                'description' => 'Makanan beku seperti daging, ikan, sayuran beku, dan es krim.',
            ],
        ];

        // Memasukkan data kategori ke dalam tabel
        DB::table('categories')->insert($categories);
    }
}
