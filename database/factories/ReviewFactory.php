<?php

namespace Database\Factories;

use App\Models\Campground;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => '大佐山オートキャンプ場は快適',
            'comment' => '夏でも標高が高いので涼しくて、設備もきれいで良い！あと地味に嬉しいのが電子マネーやクレジットカードにも対応してくれているところ。',
            'rate' => 4.5,
            'campground_id' => Campground::factory(),
            'user_id' => User::factory(),
        ];
    }
}
