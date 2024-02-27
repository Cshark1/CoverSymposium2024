<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    public static function getSchedule()
    {
        return Schedule::all()->sortBy('start_time');
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
}
