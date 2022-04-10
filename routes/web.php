<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicineController;
use App\Models\Category;
use App\Models\Medicine;
use Faker\Provider\Medical;

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

Route::get('/catalogue/medicine', [MedicineController::class, 'index'])->name('list.medicine');
Route::get('/catalogue/medicine/{id}', [MedicineController::class, 'show'])->name('catalogue.medicine');
Route::get('/catalogue/medicine/category/{category}', [MedicineController::class, 'med_by_category']);

Route::get('/query1table/1', [CategoryController::class, 'index']);
Route::get('/query1table/2', [MedicineController::class, 'name_formula_price']);
Route::get('/query2table/1', [MedicineController::class, 'name_formula_price_catname']);
Route::get('/aggregatequery/1', [CategoryController::class, 'count_have_medicine']);
Route::get('/aggregatequery/2', [CategoryController::class, 'show_haveno_medicine']);
Route::get('/aggregatequery/3', [CategoryController::class, 'avg_price']);
Route::get('/aggregatequery/4', [CategoryController::class, 'have_one_medicine_only']);
Route::get('/aggregatequery/5', [MedicineController::class, 'have_one_form_only']);
Route::get('/aggregatequery/6', [MedicineController::class, 'highest_price']);

Route::get('/testmodal', function() {
    return view('modal_test');
});

Route::get('/testajax', function() {
    return view('ajax_test');
});

Route::post('/medicine/showInfo', [MedicineController::class, 'showInfo'])->name('medicine.showInfo');