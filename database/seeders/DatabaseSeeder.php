<?php
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            \Database\Seeders\CategoriesTableSeeder::class,
            \Database\Seeders\ProductsTableSeeder::class,
        ]);
    }
}
// jalankan di terminal => php artisan db:seed 