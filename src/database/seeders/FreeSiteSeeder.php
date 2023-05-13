<?php

namespace Database\Seeders;

use App\Models\FreeSite;
use Illuminate\Database\Seeder;

class FreeSiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FreeSite::factory()->create();
    }
}
