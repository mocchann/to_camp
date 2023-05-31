<?php

namespace Database\Factories;

use App\Models\Campground;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EarlyCheckIn>
 */
class EarlyCheckInFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'campground_id' => Campground::factory(),
            'start_time' => Carbon::createFromTime(11, 0),
            'site_price' => 1000,
            'adult_price' => 1000,
            'child_price' => 500,
            'description' => '備考',
        ];
    }
}
