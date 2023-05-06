<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FreeSiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('free_sites')->insert([
            'campground_id' => 1,
            'min_size' => 45,
            'max_size' => 120,
            'site_price' => 4500,
            'adult_price' => 0,
            'child_price' => 0,
            'description' => '備考',
        ]);
    }
}
