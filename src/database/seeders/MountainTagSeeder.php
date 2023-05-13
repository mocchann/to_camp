<?php

namespace Database\Seeders;

use App\Models\Campground;
use App\Models\MountainTag;
use Illuminate\Database\Seeder;

class MountainTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MountainTag::factory()->has(Campground::factory())->create();
    }
}
