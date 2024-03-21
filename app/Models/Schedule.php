<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Schedule extends Model
{
    use HasFactory;

    public static function getSchedule()
    {
        return Schedule::with('speaker')->get()->sortBy('start_time');
    }

    protected function startTime(): Attribute
    {
        return new Attribute(function ($value) {
            return date('H:i', strtotime($value));
        });
    }

    protected function endTime(): Attribute
    {
        return new Attribute(function ($value) {
            return date('H:i', strtotime($value));
        });
    }

    public function speaker(): BelongsTo
    {
        return $this->belongsTo(Speaker::class);
    }

    public function isPublished(): bool
    {
        return ($this->published_at < now());
    }
}
