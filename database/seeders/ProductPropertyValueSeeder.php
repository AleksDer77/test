<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductPropertyValueSeeder extends Seeder
{
    public function run()
    {
        DB::table('product_property_value')->insert([
            [
                'product_id' => 1,
                'property_value_id' => 1,
            ],
            [
                'product_id' => 1,
                'property_value_id' => 4,
            ],
            [
                'product_id' => 1,
                'property_value_id' => 8,
            ],
            [
                'product_id' => 2,
                'property_value_id' => 1,
            ],
            [
                'product_id' => 2,
                'property_value_id' => 4,
            ],
            [
                'product_id' => 2,
                'property_value_id' => 7,
            ],
            [
                'product_id' => 3,
                'property_value_id' => 2,
            ],
            [
                'product_id' => 3,
                'property_value_id' => 6,
            ],
            [
                'product_id' => 3,
                'property_value_id' => 8,
            ],
            [
                'product_id' => 4,
                'property_value_id' => 1,
            ],
            [
                'product_id' => 4,
                'property_value_id' => 6,
            ],
            [
                'product_id' => 4,
                'property_value_id' => 9,
            ],
            [
                'product_id' => 5,
                'property_value_id' => 2,
            ],
            [
                'product_id' => 5,
                'property_value_id' => 6,
            ],
            [
                'product_id' => 5,
                'property_value_id' => 9,
            ],
            [
                'product_id' => 6,
                'property_value_id' => 3,
            ],
            [
                'product_id' => 6,
                'property_value_id' => 5,
            ],
            [
                'product_id' => 6,
                'property_value_id' => 9,
            ],
            [
                'product_id' => 7,
                'property_value_id' => 1,
            ],
            [
                'product_id' => 7,
                'property_value_id' => 4,
            ],
            [
                'product_id' => 7,
                'property_value_id' => 9,
            ],
            [
                'product_id' => 8,
                'property_value_id' => 1,
            ],
            [
                'product_id' => 8,
                'property_value_id' => 5,
            ],
            [
                'product_id' => 8,
                'property_value_id' => 9,
            ],
            [
                'product_id' => 9,
                'property_value_id' => 3,
            ],
            [
                'product_id' => 9,
                'property_value_id' => 4,
            ],
            [
                'product_id' => 9,
                'property_value_id' => 8,
            ],
            [
                'product_id' => 10,
                'property_value_id' => 3,
            ],
            [
                'product_id' => 10,
                'property_value_id' => 6,
            ],
            [
                'product_id' => 10,
                'property_value_id' => 7,
            ],
        ]);
    }
}
