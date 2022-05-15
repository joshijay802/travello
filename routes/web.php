<?php

use Illuminate\Support\Facades\Route;
use App\Models\Destination;
use App\Http\Controllers\DestinationController;
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

Route::get('/',[DestinationController::class,'index']);

Route::get('/index.html', [DestinationController::class,'index']);

Route::get('/about.html', function () {
    return view('about');
});
Route::get('/contact.html', function () {
    return view('contact');
});
