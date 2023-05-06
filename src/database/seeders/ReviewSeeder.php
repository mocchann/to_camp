<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            'title' => '大佐山オートキャンプ場は快適',
            'comment' => '夏でも標高が高いので涼しくて、設備もきれいで良い！あと地味に嬉しいのが電子マネーやクレジットカードにも対応してくれているところ。',
            'rate' => 4.5,
            'campground_id' => 1,
            'user_id' => 1,
        ]);
    }
}
