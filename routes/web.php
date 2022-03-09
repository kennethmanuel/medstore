<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicineController;
use App\Models\Medicine;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/catalogue', function () {
    return view('catalogue');
});

Route::get('/catalogue/med_equip', function () {
    return view('med_equip');
});

Route::get('/catalogue/medicine', [MedicineController::class, 'index']);
Route::get('/catalogue/medicine/{id}', [MedicineController::class, 'show']);
Route::get('/catalogue/medicine/category/{category}', [MedicineController::class, 'med_by_category']);
