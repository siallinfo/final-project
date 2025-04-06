<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CountdownBanner;
use Carbon\Carbon;

class CountdownBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        CountdownBanner::create([
            'title' => 'Best Offer - Up to',
            'discount_text' => '30%',
            'description' => 'Explore our latest New Arrivals & unlock discounts!',
            'image' => 'website/assets/img/banner/banner__3.png', // Change as needed
            'end_date' => Carbon::now()->addDays(02),
        ]);
    }
}
