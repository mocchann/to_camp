<?php

namespace Database\Factories;

use App\Models\Campground;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LateCheckOut>
 */
class LateCheckOutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'campground_id' => Campground::factory()->make()->first()->id,
            'end_time' => Carbon::createFromTime(16, 0),
            'site_price' => 1000,
            'adult_price' => 1000,
            'child_price' => 500,
            'description' => '備考'
        ];
    }
}
