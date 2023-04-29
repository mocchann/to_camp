<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacilityTag extends Model
{
    use HasFactory;

    public function campgrounds()
    {
        return $this->belongsToMany(Campground::class);
    }
}
