<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class CacheController extends Controller
{
    public function clearCache()
    {
        // Clear the view cache
        Artisan::call('view:clear');
        
        // Clear the route cache
        Artisan::call('route:clear');

        // Clear the configuration cache
        Artisan::call('config:clear');

        // Clear the application cache
        Artisan::call('cache:clear');

        return 'Cache cleared successfully';
    }
}
