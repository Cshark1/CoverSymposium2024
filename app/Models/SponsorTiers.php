<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SponsorTiers extends Model
{
    use HasFactory;

    public function sponsors()
    {
        return $this->hasMany(Sponsor::class);
    }

    public static function getSponsorTiers()
    {
        return SponsorTiers::with('sponsors')->get();
    }
}
