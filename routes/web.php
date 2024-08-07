<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChecksheetController;
use App\Http\Controllers\ChecksheetDetailController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\ItemChecksheetController;
use App\Http\Controllers\KategoriChecksheetController;
use App\Http\Controllers\KategorisparepartController;
use App\Http\Controllers\KeretaController;
use App\Http\Controllers\SignatureController;
use App\Http\Controllers\SparepartController;
use App\Http\Controllers\UserController;
use App\Models\Kategori_checksheet;
use Illuminate\Support\Facades\Auth;
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
Route::get('/', function () {
    return view('login.login');
})->name('login');

Route::get('/autologin', [AuthController::class, 'autologin']);

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['auth'])->group(function () {

    //Dashboard
    Route::resource('dashboard', DashboardController::class);

    //master kereta
    Route::resource('kereta', KeretaController::class);
    //hapusnomor
    Route::get('kereta/hapusnomor/{id}', [KeretaController::class, 'hapusnomor'])->name('kereta.hapusnomor');

    //kategori sparepart
    Route::resource('kategori', KategorisparepartController::class);

    //Sparepart
    Route::resource('sparepart', SparepartController::class);

    // //Checksheet
    Route::resource('kategori_checksheet', KategoriChecksheetController::class);
    //Route::resource('sub_checksheet',SubChecksheetController::class);
    Route::resource('item_checksheet', ItemChecksheetController::class);
    Route::resource('checksheet', ChecksheetController::class);

    //filter
    Route::get('kategori_checksheet/filter/{id}', [KategoriChecksheetController::class, 'filter'])->name('kategori_checksheet.filter');
    Route::get('item_checksheet/filter/{id}', [ItemChecksheetController::class, 'filter'])->name('item_checksheet.filter');
    Route::get('checksheet/filter/{id}', [ChecksheetController::class, 'filter'])->name('checksheet.filter');

    //master_user
    Route::resource('user', UserController::class);

    //Foto
    Route::resource('photo', FotoController::class);

    //SO
    Route::get('so', [ChecksheetController::class, 'report_so']);
    Route::get('so/print', [ChecksheetController::class, 'print_report_so'])->name('so.print');

    //Report Checksheet
    Route::get('report_checksheet', [ChecksheetController::class, 'report_checksheet']);
});

// cetak checksheet
Route::get('checksheet/print/{id}', [ChecksheetController::class, 'print'])->name('checksheet.print');
Route::get('checksheet/approve/{id}', [ChecksheetController::class, 'approve'])->name('checksheet.approve');
Route::get('report_checksheet/print', [ChecksheetController::class, 'print_report_checksheet'])->name('report.checksheet.print');

Route::get('print', [FotoController::class, 'print'])->name('photo.print');
Route::get('download', [FotoController::class, 'download'])->name('photo.download');

Route::get('verify/{uid}', [SignatureController::class, 'index'])->name('signature.index');

Route::post('login', [App\Http\Controllers\AuthController::class, 'login'])->name('login.action');
Route::get('logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
