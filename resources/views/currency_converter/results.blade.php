@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="card mx-auto" style="max-width: 400px;">
            <div class="card-body">
                <h2 class="card-title text-center mb-4">Conversion Results</h2>
                <p class="mb-3">Amount in USD: ${{ $amount }}</p>
                <p class="mb-3">Converted Amount in TMT: {{ $convertedAmount }} TMT</p>
                <a href="{{ url('/currency-converter') }}" class="btn btn-primary w-100">Back to Converter</a>
            </div>
        </div>
    </div>
@endsection
