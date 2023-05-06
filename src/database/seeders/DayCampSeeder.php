<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DayCampSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('day_camps')->insert([
            'campground_id' => 1,
            'start_time' => Carbon::createFromTime(9, 0),
            'end_time' => Carbon::createFromTime(17, 0),
            'adult_price' => 1000,
            'child_price' => 500,
            'description' => '備考',
        ]);
    }
}
