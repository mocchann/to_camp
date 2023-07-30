<?php

namespace Database\Seeders;

use App\Models\AnimeTag;
use App\Models\Campground;
use Illuminate\Database\Seeder;

class AnimeTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AnimeTag::factory()->has(Campground::factory())->create();
    }
}
