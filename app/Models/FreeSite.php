<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FreeSite extends Model
{
    use HasFactory;

    public function campground()
    {
        return $this->belongsTo(Campground::class);
    }
}
