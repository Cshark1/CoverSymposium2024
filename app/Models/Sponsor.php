<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sponsor extends Model
{
    use HasFactory;

    public static function getSponsors()
    {
        return Sponsor::with('sponsorTiers')->get()->sortBy('order');
    }

    public function sponsorTiers(): BelongsTo
    {
        return $this->belongsTo(SponsorTiers::class);
    }
}
