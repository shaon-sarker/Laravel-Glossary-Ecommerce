<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            [
                'brand_name' => 'Apple',
                'brand_image' => 'apple.png',
            ],
            [
                'brand_name' => 'Samsung',
                'brand_image' => 'samsung.png',
            ],
            [
                'brand_name' => 'Nike',
                'brand_image' => 'nike.png',
            ],
            [
                'brand_name' => 'Adidas',
                'brand_image' => 'adidas.png',
            ],
            [
                'brand_name' => 'Sony',
                'brand_image' => 'sony.png',
            ],
        ];

        foreach ($brands as $brand) {
            DB::table('brands')->insert([
                'brand_name'  => $brand['brand_name'],
                'brand_slug'  => Str::slug($brand['brand_name']),
                'brand_image' => $brand['brand_image'],
            ]);
        }

    }
}
