<?php

namespace Database\Seeders;

use App\Models\AmenityTag;
use App\Models\Campground;
use Illuminate\Database\Seeder;

class AmenityTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AmenityTag::factory()->has(Campground::factory())->create();
    }
}
