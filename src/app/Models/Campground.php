<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campground extends Model
{
    use HasFactory;

    public function facilities()
    {
        return $this->belongsToMany(Facility::class);
    }

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
}
