<?php

namespace Database\Seeders;

use App\Models\SectionSite;
use Illuminate\Database\Seeder;

class SectionSiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SectionSite::factory()->create();
    }
}
