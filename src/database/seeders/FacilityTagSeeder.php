<?php

namespace Database\Seeders;

use App\Models\Campground;
use App\Models\FacilityTag;
use Illuminate\Database\Seeder;

class FacilityTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FacilityTag::factory()->has(Campground::factory())->create();
    }
}
