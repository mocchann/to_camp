<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AmenityTag extends Model
{
    use HasFactory;

    public function campgrounds()
    {
        $this->belongsToMany(Campground::class);
    }
}
