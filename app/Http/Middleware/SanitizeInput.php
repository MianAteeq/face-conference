<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SanitizeInput
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        // Sanitize all input fields
        $sanitized = $this->sanitize($request->all());
        $request->merge($sanitized);

        return $next($request);
    }

    /**
     * Recursively sanitize input.
     */
    protected function sanitize(array $inputs)
    {
        foreach ($inputs as $key => $value) {
            if (is_array($value)) {
                $inputs[$key] = $this->sanitize($value);
            } else {
                // Remove script tags and encode HTML entities
                $inputs[$key] = htmlspecialchars(strip_tags($value), ENT_QUOTES, 'UTF-8');
            }
        }
        return $inputs;
    }
}
