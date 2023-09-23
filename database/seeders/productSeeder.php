<?php

namespace Database\Seeders;

use App\Models\product\product;
use Illuminate\Database\Seeder;

class productSeeder extends Seeder
{
    public function run(): void
    {

        $data = [
            [
                'Code' => '1',
                'pro_name' => 'Sugar',
                'cat_id' => '1',
                'sub_catID' => '1',
                'sku' => 'kg',
                'cost_price' => '100',
                'retail_price' => '150',
            ],
            [
                'Code' => '2',
                'pro_name' => 'Sugar',
                'cat_id' => '1',
                'sub_catID' => '1',
                'sku' => 'kg',
                'cost_price' => '100',
                'retail_price' => '150',
            ],
            [
                'Code' => '3',
                'pro_name' => 'Sugar',
                'cat_id' => '1',
                'sub_catID' => '1',
                'sku' => 'kg',
                'cost_price' => '100',
                'retail_price' => '150',
            ],
            [
                'Code' => '4',
                'pro_name' => 'Sugar',
                'cat_id' => '1',
                'sub_catID' => '1',
                'sku' => 'kg',
                'cost_price' => '100',
                'retail_price' => '150',
            ],
            [
                'Code' => '5',
                'pro_name' => 'Sugar',
                'cat_id' => '1',
                'sub_catID' => '1',
                'sku' => 'kg',
                'cost_price' => '100',
                'retail_price' => '150',
            ],
            [
                'Code' => '6',
                'pro_name' => 'Sugar',
                'cat_id' => '1',
                'sub_catID' => '1',
                'sku' => 'kg',
                'cost_price' => '100',
                'retail_price' => '150',
            ],


        ];

          foreach ($data as $res){

              product::create($res);


          }

    }
}
