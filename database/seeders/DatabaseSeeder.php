<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
            UsersSeeder::class,
            // BrandSeeder::class,
            // CategorySeeder::class,
            // ProductSeeder::class,
            // SliderSeeder::class,
            // CouponSeeder::class,
            // ShippingAreaSeeder::class,
            // ShippingChargeSeeder::class,
            // OrderSeeder::class,
            // ContactSeeder::class,
            // ReviewSeeder::class,
            // SettingSeeder::class,

            // Add other seeders here as needed
         ]);

        //   \App\Models\User::factory(8)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

    }
}
