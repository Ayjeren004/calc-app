<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class CurrencyConverterController extends Controller
{
    /**
     * Show the main converter dashboard form.
     */
    public function showForm()
    {
        return view('currency_converter.form');
    }

    /**
     * Fetch latest exchange rates for a given base currency with caching.
     */
    public function getRates($base)
    {
        // Sanitize base currency code
        $base = strtoupper(substr(preg_replace('/[^a-zA-Z]/', '', $base), 0, 3));
        if (strlen($base) !== 3) {
            return response()->json(['result' => 'error', 'message' => 'Invalid currency code'], 400);
        }

        // Cache rates for 1 hour to prevent hitting API limits
        $cacheKey = "currency_rates_{$base}";
        
        try {
            $ratesData = Cache::remember($cacheKey, 3600, function () use ($base) {
                $response = Http::get("https://open.er-api.com/v6/latest/{$base}");
                
                if ($response->successful()) {
                    return $response->json();
                }
                
                throw new \Exception("Failed to fetch rates from API");
            });

            return response()->json($ratesData);
        } catch (\Exception $e) {
            Log::error("Currency Converter API Error: " . $e->getMessage());
            
            // Fallback: If API fails, try to return any stale cached value or an error
            $staleData = Cache::get($cacheKey);
            if ($staleData) {
                return response()->json(array_merge($staleData, [
                    'cached_fallback' => true,
                    'warning' => 'Serving cached rates due to API unavailability.'
                ]));
            }
            
            return response()->json([
                'result' => 'error',
                'message' => 'Unable to fetch exchange rates. Please try again later.'
            ], 500);
        }
    }
}

