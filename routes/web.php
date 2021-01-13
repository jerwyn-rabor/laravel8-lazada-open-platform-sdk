<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (\App\Services\GoogleSheet $googleSheet) {
    $googleSheet->readGoogleSheet();
    return view('welcome');
});

Route::get('lazada', 'App\Http\Controllers\LazadaController@index');
