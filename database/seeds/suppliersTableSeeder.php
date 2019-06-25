<?php

use Illuminate\Database\Seeder;

class suppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $supplier = new \App\Supplier(["name" => "supplier1", "phone_number" => "1234567890", "email" => "test1@test.com"] );
        $supplier->save();
        $supplier = new \App\Supplier(["name" => "supplier2", "phone_number" => "0987654321", "email" => "test2@test.com"] );
        $supplier->save();
    }
}
