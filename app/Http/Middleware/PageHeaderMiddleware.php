<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PageHeaderMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $pages = [
            'index' => 'Home',
            'about' => 'About',
            'contact' => 'Contact',

        ];
        view()->share('pages', $pages);
        return $next($request);
    }
}
