<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['category_name' => 'চাল', 'category_image' => 'chal.png'],
            ['category_name' => 'ডাল', 'category_image' => 'dal.png'],
            ['category_name' => 'তেল', 'category_image' => 'tel.png'],
            ['category_name' => 'মসলা', 'category_image' => 'mosla.png'],
            ['category_name' => 'আটা ও ময়দা', 'category_image' => 'ata-moyda.png'],
            ['category_name' => 'চিনি ও লবণ', 'category_image' => 'chini-lobon.png'],
            ['category_name' => 'নিত্যপ্রয়োজনীয় পণ্য', 'category_image' => 'daily-needs.png'],
            ['category_name' => 'হ্যান্ডওয়াশ ও সাবান', 'category_image' => 'soap.png'],
            ['category_name' => 'কাপড় ধোয়ার সামগ্রী', 'category_image' => 'washing.png'],
            ['category_name' => 'বেবি প্রোডাক্টস', 'category_image' => 'baby-products.png'],
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'category_name'  => $category['category_name'],
                'category_slug'  => Str::slug($category['category_name']),
                'category_image' => $category['category_image'],
            ]);
        }
    }
}
