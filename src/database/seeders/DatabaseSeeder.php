<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = 'resources/sql/seed.sql';
//        $this->call(CategoriesTableSeeder::class);
//        $this->call(ProductsTableSeeder::class);
        DB::unprepared(file_get_contents($path));
        $this->command->info('Database seeded!');
    }
}
