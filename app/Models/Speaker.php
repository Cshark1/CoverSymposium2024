<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Speaker extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function schedule(): HasMany
    {
        return $this->hasMany(Schedule::class);
    }

    public function getSpeakers(): object
    {
        return Speaker::with('schedule')->get();
    }

    public function isPublished(): bool
    {
        return ($this->published_at < now());
    }
}
