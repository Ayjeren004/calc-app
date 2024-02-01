<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurrencyConverterController extends Controller
{
    public function showForm()
    {
        return view('currency_converter.form');
    }

    public function convert(Request $request)
    {
        $amount = $request->input('amount');

        // Assuming 1 USD = 3.5 TMT (You should use the actual exchange rate)
        $conversionRate = 3.5;
        $convertedAmount = $amount * $conversionRate;

        return view('currency_converter.results', ['amount' => $amount, 'convertedAmount' => $convertedAmount]);
    }
}
