<?php

namespace Database\Seeders;

use App\Models\EarlyCheckIn;
use Illuminate\Database\Seeder;

class EarlyCheckInSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EarlyCheckIn::factory()->create();
    }
}
