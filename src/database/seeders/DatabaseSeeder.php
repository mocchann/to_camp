<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Campground;
use App\Models\SiteTag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call([
            CampgroundSeeder::class,
            AmenityTagSeeder::class,
            AnimeTagSeeder::class,
            BookmarkSeeder::class,
            DayCampSeeder::class,
            EarlyCheckInSeeder::class,
            FacilityTagSeeder::class,
            FreeSiteSeeder::class,
            LateCheckOutSeeder::class,
            LocationTagSeeder::class,
            MountainTagSeeder::class,
            ReviewSeeder::class,
            SectionSiteSeeder::class,
            SiteTagSeeder::class,
        ]);
    }
}
