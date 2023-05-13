<?php

namespace Database\Seeders;

use App\Models\Campground;
use App\Models\SiteTag;
use Illuminate\Database\Seeder;

class SiteTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SiteTag::factory()->has(Campground::factory())->create();
    }
}
