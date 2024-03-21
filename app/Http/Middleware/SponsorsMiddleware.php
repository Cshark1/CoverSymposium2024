<?php


namespace App\Http\Middleware;

use App\Models\Sponsor;
use App\Models\SponsorTiers;
use Closure;
use Illuminate\Http\Request;

class SponsorsMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        view()->share('sponsorTier', SponsorTiers::getSponsorTiers());
        return $next($request);
    }
}
