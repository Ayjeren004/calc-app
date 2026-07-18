<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CurrencyConverterController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [CurrencyConverterController::class, 'showForm']);
Route::get('/currency-converter', [CurrencyConverterController::class, 'showForm']);
Route::get('/api/rates/{base}', [CurrencyConverterController::class, 'getRates']);



