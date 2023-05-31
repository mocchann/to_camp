<?php

namespace Database\Seeders;

use App\Models\Campground;
use Illuminate\Database\Seeder;

class CampgroundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Campground::factory()->create();
    }
}
