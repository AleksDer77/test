<?php

namespace Database\Seeders;

use App\Models\PropertyValue;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropertyValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PropertyValue::query()->insert([
            [
                'property_id' => 1,
                'value' => 'blue',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'property_id' => 1,
                'value' => 'black',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'property_id' => 1,
                'value' => 'white',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'property_id' => 2,
                'value' => 'metal',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'property_id' => 2,
                'value' => 'plastic',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'property_id' => 2,
                'value' => 'glass',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'property_id' => 3,
                'value' => 'philips',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'property_id' => 3,
                'value' => 'xiaomi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'property_id' => 3,
                'value' => 'ikea',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
