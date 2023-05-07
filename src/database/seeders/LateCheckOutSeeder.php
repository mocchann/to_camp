<?php

namespace Database\Seeders;

use App\Models\LateCheckOut;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LateCheckOutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LateCheckOut::factory()->create();
    }
}
