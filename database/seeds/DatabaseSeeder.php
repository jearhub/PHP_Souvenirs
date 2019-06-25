<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(suppliersTableSeeder::class);
        $this->call(categoriesTableSeeder::class);
        $this->call(souvenirsTableSeeder::class);
    }
}
