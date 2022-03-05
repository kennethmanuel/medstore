<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicineController;

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

// Route::get('/catalogue/medicine', function () {
//     return view('medicine');
// });

Route::get('/catalogue/med_equip', function () {
    return view('med_equip');
});

// Route::get('/medicine/{medicine_id}', function ($medicine_id) {
//     $medicine = [
//         [
//             "med_id" => 1,
//             "med_name" => "Tango",
//             "description" => "Forage to survive on the battlefield.",
//             "img" => "https://static.wikia.nocookie.net/dota2_gamepedia/images/f/fd/Tango_icon.png"
//         ],
//         [
//             "med_id" => 2,
//             "med_name" => "Salve",
//             "description" => "A magical salve that can quickly mend even the deepest of wounds.",
//             "img" => "https://static.wikia.nocookie.net/dota2_gamepedia/images/3/36/Healing_Salve_icon.png"
//         ],
//         [
//             "med_id" => 3,
//             "med_name" => "Mango",
//             "description" => "The bittersweet flavors of Jidi Isle are irresistible to amphibians.",
//             "img" => "https://static.wikia.nocookie.net/dota2_gamepedia/images/7/70/Enchanted_Mango_icon.png"
//         ],
//     ];

//     $selected_med = [];

//     foreach($medicine as $med) {
//         if($med["med_id"] == $medicine_id) {
//             $selected_med = $med;
//         }
//     }

//     return view('item', [
//         "med" => $selected_med
//     ]);
// });

// Route::get('/med_equip/{med_equip_id}', function ($med_equip_id) {
//     $med_eq = [
//         [
//             "med_equip_id" => 1,
//             "med_name" => "Ghost Scepter",
//             "description" => "Imbues the wielder with a ghostly presence, allowing them to evade physical damage.",
//             "img" => "https://static.wikia.nocookie.net/dota2_gamepedia/images/9/9d/Ghost_Scepter_icon.png"
//         ],
//         [
//             "med_equip_id" => 2,
//             "med_name" => "Magic Wand",
//             "description" => "A simple wand used to channel magic energies, it is favored by apprentice wizards and great warlocks alike.",
//             "img" => "https://static.wikia.nocookie.net/dota2_gamepedia/images/7/74/Magic_Wand_icon.png"
//         ],
//         [
//             "med_equip_id" => 3,
//             "med_name" => "Mekans",
//             "description" => "A glowing jewel formed out of assorted parts that somehow fit together perfectly.",
//             "img" => "https://static.wikia.nocookie.net/dota2_gamepedia/images/f/f7/Mekansm_icon.png"
//         ],
//     ];

//     $selected_med_equip = [];

//     foreach($med_eq as $mq) {
//         if($mq["med_equip_id"] == $med_equip_id) {
//             $selected_med_equip = $mq;
//         }
//     }

//     return view('item', [
//         "med" => $selected_med_equip
//     ]);
// });

Route::get('/catalogue/medicine', [MedicineController::class, 'index']);
Route::get('/catalogue/medicine/category/{category}', [MedicineController::class, 'med_by_category']);
