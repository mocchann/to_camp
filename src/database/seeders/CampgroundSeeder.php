<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class CampgroundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        DB::table('campgrounds')->insert([
            'name' => '【ダミー】大佐山オートキャンプ場',
            'address' => $faker->address(),
            'phone_number' => $faker->phoneNumber(),
            'holiday' => 8256,
            'start_date' => new Carbon('2023-04-01'),
            'end_date' => new Carbon('2024-12-31'),
            'check_in_time' => '13:00~18:00',
            'check_out_time' => '9:00~11:00',
            'image' => 'no-image.jpg',
            'website_url' => 'https://example.com',
            'latitude' => 35.075488804371034,
            'longitude' => 133.55041164417705,
            'place_id' => 'ChIJLW0Bxxy-VjURHbn6mTG5GL4'
        ]);
    }
}
