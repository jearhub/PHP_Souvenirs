<?php

use Illuminate\Database\Seeder;

class souvenirsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $souvenir = new \App\souvenir(["name" => "Maori Necklace", "description" => "Green swirl", "price" => 12, "imagePath" => "images/items/Maori1.jpg", "supplier_id" => "1", "category_id" => "1"] );
        $souvenir->save();
        $souvenir = new \App\souvenir(["name" => "Maori Club", "description" => "Wooden carved and polished", "price" => 200, "imagePath" => "images/items/Maori4.jpg", "supplier_id" => "1", "category_id" => "1"] );
        $souvenir->save();
        $souvenir = new \App\souvenir(["name" => "Maori Necklace", "description" => "Green swirl", "price" => 12, "imagePath" => "images/items/Maori1.jpg", "supplier_id" => "1", "category_id" => "1"] );
        $souvenir->save();
        $souvenir = new \App\souvenir(["name" => "Maori Club", "description" => "Wooden carved and polished", "price" => 200, "imagePath" => "images/items/Maori4.jpg", "supplier_id" => "1", "category_id" => "1"] );
        $souvenir->save();
        $souvenir = new \App\souvenir(["name" => "Maori Necklace", "description" => "Green swirl", "price" => 12, "imagePath" => "images/items/Maori1.jpg", "supplier_id" => "1", "category_id" => "1"] );
        $souvenir->save();
        $souvenir = new \App\souvenir(["name" => "Maori Club", "description" => "Wooden carved and polished", "price" => 200, "imagePath" => "images/items/Maori4.jpg", "supplier_id" => "1", "category_id" => "1"] );
        $souvenir->save();
    }
}
