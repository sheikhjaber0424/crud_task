<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Razer Mouse',
                'price' => '1699৳',
                'gallery'=> 'https://www.startech.com.bd/image/cache/catalog/mouse/razer/deathadder-essetial/deathadder-essential-500x500.jpg'
            ],
            [
                'name' => 'Logitech Mouse',
                'price' => '11200৳',    
                'gallery'=> 'https://www.startech.com.bd/image/cache/catalog/mouse/logitech/g502-lightspeed/g502-lightspeed-001-500x500.jpg'
            ],
            [
                'name' => 'Logitech G903 Lightspeed HERO RGB Wireless Gaming Mouse',
                'price' => '11000৳',           
                'gallery'=> 'https://www.startech.com.bd/image/cache/catalog/mouse/logitech/g903-lightspeed/g903-lightspeed-01-500x500.jpg'
            ],
            [
                'name' => 'Logitech Signature M650 light weight Wireless Mouse',
                'price' => '3299৳',
                'gallery'=> 'https://www.startech.com.bd/image/cache/catalog/mouse/logitech/m650/m650-01-500x500.jpg'
            ]
            ]);
    }
}
