<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    use HasFactory;

    public function campground()
    {
        return $this->belongsTo(Campground::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
