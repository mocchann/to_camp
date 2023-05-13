<?php

namespace Database\Factories;

use App\Models\Campground;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SectionSite>
 */
class SectionSiteFactory extends Factory
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
            'min_size' => 45,
            'max_size' => 120,
            'site_price' => 4500,
            'adult_price' => 0,
            'child_price' => 0,
            'description' => '備考',
        ];
    }
}
