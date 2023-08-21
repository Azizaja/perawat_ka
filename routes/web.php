<?php

use App\Http\Controllers\ChecksheetController;
use App\Http\Controllers\ItemChecksheetController;
use App\Http\Controllers\KategoriChecksheetController;
use App\Http\Controllers\KategorisparepartController;
use App\Http\Controllers\KeretaController;
use App\Http\Controllers\SparepartController;
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
//route login
Route::get('/login', function () {
    return view('login.login');
});

Route::get('/', function () {
    return view('welcome');
});

//Dashboard
Route::get('/app', function () {
    $active = 'dashboard';
    return view('dashboard.show', compact('active'));
});

//master kereta
Route::resource('kereta', KeretaController::class);

//kategori sparepart
Route::resource('kategori', KategorisparepartController::class);

//Sparepart
Route::resource('sparepart', SparepartController::class);

// //Checksheet
Route::resource('kategori_checksheet',KategoriChecksheetController::class);
//Route::resource('sub_checksheet',SubChecksheetController::class);
Route::resource('item_checksheet',ItemChecksheetController::class);
Route::resource('checksheet',ChecksheetController::class);
// Route::resource('checksheet_detail',ChecksheetDetailController::class);
// //Foto
// Route::resource('foto', FotoController::class);


