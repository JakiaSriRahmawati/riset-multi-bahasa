<?php

use App\Http\Controllers\RegistrasiController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('regis');
});

// Route::get('/regis', function () {
//     return view('regis');
// });
Route::get('/regis/{locale}', function ($locale) {
    App::setLocale($locale);
    return view('regis');
});
