<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use App\Models\Campground;
use App\Models\DayCamp;
use App\Models\EarlyCheckIn;
use App\Models\FreeSite;
use App\Models\LateCheckOut;
use App\Models\Review;
use App\Models\SectionSite;

class HomeController extends Controller
{
    public function index()
    {
        $campground_data = [];
        $campground_data = Campground::find(3)->animeTags;
        $campground_data = [
            'campgrounds' => Campground::all(),
            'day_camps' => DayCamp::all(),
            'early_check_ins' => EarlyCheckIn::all(),
            'late_check_outs' => LateCheckOut::all(),
            'section_sites' => SectionSite::all(),
            'free_sites' => FreeSite::all(),
            'reviews' => Review::all(),
            'bookmarks' => Bookmark::all(),
        ];

        return view('home.index', ['campground_data' => $campground_data]);
    }
}
