<?php

namespace Database\Factories;

use App\Models\Campground;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bookmark>
 */
class BookmarkFactory extends Factory
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
            'user_id' => User::factory()->make()->first()->id,
        ];
    }
}
