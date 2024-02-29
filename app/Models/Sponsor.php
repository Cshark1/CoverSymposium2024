<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    use HasFactory;

    public static function getSponsors()
    {
        return Sponsor::all()->sortBy('order');
    }

    public static function getContent()
    {
        return Sponsor::select('name', 'description', 'link', 'image', 'order')->orderBy('order', 'desc')->get();
    }
}
