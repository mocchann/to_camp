<?php

namespace Database\Seeders;

use App\Models\DayCamp;
use Illuminate\Database\Seeder;

class DayCampSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DayCamp::factory()->create();
    }
}
