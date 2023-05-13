<?php

namespace Database\Seeders;

use App\Models\Campground;
use App\Models\LocationTag;
use Illuminate\Database\Seeder;

class LocationTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LocationTag::factory()->has(Campground::factory())->create();
    }
}
