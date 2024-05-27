<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campground extends Model
{
    use HasFactory;

    public function sectionSites()
    {
        return $this->hasMany(SectionSite::class);
    }

    public function freeSites()
    {
        return $this->hasMany(FreeSite::class);
    }

    public function earlyCheckIns()
    {
        return $this->hasMany(EarlyCheckIn::class);
    }

    public function lateCheckOuts()
    {
        return $this->hasMany(LateCheckOut::class);
    }

    public function dayCamps()
    {
        return $this->hasMany(DayCamp::class);
    }

    public function siteTags()
    {
        return $this->belongsToMany(SiteTag::class);
    }

    public function locationTags()
    {
        return $this->belongsToMany(LocationTag::class);
    }

    public function amenityTags()
    {
        return $this->belongsToMany(AmenityTag::class);
    }

    public function animeTags()
    {
        return $this->belongsToMany(AnimeTag::class);
    }

    public function facilityTags()
    {
        return $this->belongsToMany(FacilityTag::class);
    }

    public function mountainTags()
    {
        return $this->belongsToMany(MountainTag::class);
    }

    public function bookmarks()
    {
        return $this->belongsToMany(Bookmark::class);
    }

    public function reviews()
    {
        return $this->belongsToMany(Review::class);
    }
}
