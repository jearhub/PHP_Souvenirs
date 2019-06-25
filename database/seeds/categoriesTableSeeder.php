<?php

use Illuminate\Database\Seeder;

class categoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new \App\category(["name" => "Maori Gifts"] );
        $category->save();
        $category = new \App\category(["name" => "Maori Gifts"] );
        $category->save();
    }
}
