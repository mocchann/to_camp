<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LateCheckOutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('late_check_outs')->insert([
            'campground_id' => 1,
            'end_time' => Carbon::createFromTime(16, 0),
            'site_price' => 1000,
            'adult_price' => 1000,
            'child_price' => 500,
            'description' => '備考',
        ]);
    }
}
