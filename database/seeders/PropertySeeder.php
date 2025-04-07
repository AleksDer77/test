<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Property::query()->insert([
            [
                'name' => 'color',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'material',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'brand',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
