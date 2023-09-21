<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AuthImageAccess
{
    public function handle($request, Closure $next)
    {
        // Get the URL-encoded path parameter from the request
        $path = $request->route('path');
        
        // Convert the URL-encoded path to the actual path
        $filePath = urldecode($path);
        
        // Check if the authenticated user has permission to access the file
        if (auth()->check() && Storage::exists($filePath)) {
            return $next($request);
        } else {
            // Return a response indicating unauthorized access or file not found
            return response('Unauthorized or file not found', 401);
        }
    }
}

