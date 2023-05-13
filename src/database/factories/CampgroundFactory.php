<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Campground>
 */
class CampgroundFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => '【ダミー】大佐山オートキャンプ場',
            'address' => $this->faker->address(),
            'phone_number' => $this->faker->phoneNumber(),
            'holiday' => 8256,
            'start_date' => new Carbon('2023-04-01'),
            'end_date' => new Carbon('2024-12-31'),
            'check_in_time' => '13:00~18:00',
            'check_out_time' => '9:00~11:00',
            'image' => 'no-image.jpg',
            'website_url' => 'https://example.com',
            'latitude' => 35.075488804371034,
            'longitude' => 133.55041164417705,
            'place_id' => 'ChIJLW0Bxxy-VjURHbn6mTG5GL4',
        ];
    }
}
