<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'iPhone 13',
            'price' => 6009,
            'manufacturer_id' => 1,
            'image' => 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-13-pro-max-graphite-select?wid=470&hei=556&fmt=png-alpha&.v=1631652956000',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);

        DB::table('products') ->insert([
            'name' => 'Note 21',
            'price' => 5674,
            'manufacturer_id' => 2,
            'image' => 'https://cdn.shopify.com/s/files/1/0423/2750/7093/products/MysticBronze_d9a540a0-33e7-4506-a822-cd0d298ce3be.jpg?v=1626108488',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);

        DB::table('products')->insert([
            'name' => 'Surface Pro',
            'price' => 1234,
            'manufacturer_id' => 3,
            'image' =>'https://cdn-o.fishpond.com.au/0160/166/583/1412902164/original.jpeg',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);

        DB::table('products')->insert([
            'name' => 'Google Pixel',
            'price' => 1000,
            'manufacturer_id' => 4,
            'image' => 'https://cdn.shopify.com/s/files/1/0423/2750/7093/products/google-pixel-5-Sorta-Sage_1.jpg?v=1626273486',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
    }
}
