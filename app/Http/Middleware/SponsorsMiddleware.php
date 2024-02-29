<?php


namespace App\Http\Middleware;

use App\Models\Sponsor;
use Closure;
use Illuminate\Http\Request;

class SponsorsMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        view()->share('sponsors', Sponsor::getSponsors());
        return $next($request);
    }
}
