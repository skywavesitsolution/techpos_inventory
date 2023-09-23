<?php

namespace Database\Seeders;

use App\Models\category\subcategory;
use Illuminate\Database\Seeder;

class subcategorySeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'name' => 'Un-category',
                'slug' => 'Un-category',
                'cat_id' => '1'

            ],
            [
            'name' => 'Un-category',
                'slug' => 'Un-category',
                'cat_id' => '1'

            ],
            [
                'name' => 'Un-category',
                'slug' => 'Un-category',
                'cat_id' => '1'
            ],
            [
            'name' => 'Un-category',
                    'slug' => 'Un-category',
                'cat_id' => '1'

                ],
            [
                'name' => 'Un-category',
                'slug' => 'Un-category',
                'cat_id' => '1'

            ]
            ];

        foreach ($data as $res){
            subcategory::create($res);
        }
    }
}
