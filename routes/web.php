<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewMapController;

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

// Route::get('/', function () {
//     return view('maps.trayu');
// });



Route::get('/maps/view/{desa}', [ViewMapController::class, 'viewMap'])->name('maps.view');