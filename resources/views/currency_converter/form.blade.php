@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="card mx-auto" style="max-width: 400px;">
            <div class="card-body">
                <h2 class="card-title text-center mb-4">Currency Converter</h2>
                <form action="{{ url('/currency-converter') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="amount" class="form-label">Enter Amount in USD:</label>
                        <input type="text" name="amount" id="amount" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Convert</button>
                </form>
            </div>
        </div>
    </div>
@endsection
